<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ticket;

class FetchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      /* connect to gmail */
      //$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
      $hostname = '{imap.gmail.com:993/ssl/novalidate-cert}[Gmail]/All Mail';
      $username = 'sirajum.monir@bexcom.net';
      $password = 'suJANa53535326';

      /* try to connect */
      $inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());

      /* grab emails */
      $emails = imap_search($inbox,'UNSEEN');

      /* if emails are returned, cycle through each... */
      if($emails) {

          /* begin output var */
          $output = '';

          /* put the newest emails on top */
          rsort($emails);
          $interator = 0;
          /* for every email... */
          foreach($emails as $email_number) {
              $interator = $interator+1;
              
              if ($interator == 4) {
                break;
              }

              $mailArr = [];

              /* get information specific to this email */
              $overview = imap_fetch_overview($inbox,$email_number,0);
              $message = imap_fetchbody($inbox,$email_number,2);
              $structure = imap_fetchstructure($inbox,$email_number);

              $header = imap_headerinfo($inbox, $email_number);
              $sender = $header->from[0]->mailbox . "@" . $header->from[0]->host;

               $attachments = array();
                 if(isset($structure->parts) && count($structure->parts)) {
                   for($i = 0; $i < count($structure->parts); $i++) {
                     $attachments[$i] = array(
                        'is_attachment' => false,
                        'filename' => '',
                        'name' => '',
                        'attachment' => '');

                     if($structure->parts[$i]->ifdparameters) {
                       foreach($structure->parts[$i]->dparameters as $object) {
                         if(strtolower($object->attribute) == 'filename') {
                           $attachments[$i]['is_attachment'] = true;
                           $attachments[$i]['filename'] = $object->value;
                         }
                       }
                     }

                     if($structure->parts[$i]->ifparameters) {
                       foreach($structure->parts[$i]->parameters as $object) {
                         if(strtolower($object->attribute) == 'name') {
                           $attachments[$i]['is_attachment'] = true;
                           $attachments[$i]['name'] = $object->value;
                         }
                       }
                     }

                     if($attachments[$i]['is_attachment']) {
                       $attachments[$i]['attachment'] = imap_fetchbody($inbox, $email_number, $i+1);
                       if($structure->parts[$i]->encoding == 3) { // 3 = BASE64
                         $attachments[$i]['attachment'] = base64_decode($attachments[$i]['attachment']);
                       }
                       elseif($structure->parts[$i]->encoding == 4) { // 4 = QUOTED-PRINTABLE
                         $attachments[$i]['attachment'] = quoted_printable_decode($attachments[$i]['attachment']);
                       }
                     }
                   } // for($i = 0; $i < count($structure->parts); $i++)
                 } // if(isset($structure->parts) && count($structure->parts))

              if(count($attachments)!=0){
                  foreach($attachments as $at){
                      if($at['is_attachment']==1){
                          //file_put_contents($at['filename'], $at['attachment']);
                          //print_r($at);
                      }
                  }
              }
              /* output the email header information */
              //$output.= '<div class="toggler '.($overview[0]->seen ? 'read' : 'unread').'">';
              //$output.= '<span class="subject">'.$overview[0]->subject.'</span> ';
              //$output.= '<span class="from">'.$overview[0]->from.'</span>';
              //$output.= '<span class="date">on '.$overview[0]->date.'</span>';
              //$output.= '</div></br>';

              /* output the email body */
              //$output.= '<div class="body">'.$message.'</div>';

              //$mailArr[$interator]['from'] = $overview[0]->from;
              //$mailArr[$interator]['subject'] = $overview[0]->subject;
              //$mailArr[$interator]['body'] = $message;

              $this->createTicket(
                $sender,
                $overview[0]->subject,
                $message
              );

          }

          //$output = json_encode($mailArr);
      }

      /* close the connection */
      imap_close($inbox);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /*
      
    */
    public function createTicket($from, $subject, $body){
      //Using database transaction

      DB::beginTransaction();

      try {
        
        $id = DB::table('tickets')->insertGetId([
          'code' => time(),
          'body' => $body,
          'subject' => $subject,
          'initiator' => $from,
          'status' => 'OPEN',
          'priority' => 'Default',
          'source' => 'email',
          'createdbyuser_id' => 2,
          'updatedbyuser_id' => 2,
          'created_at' => date('Y-m-d h:i:s'),
          'updated_at' => date('Y-m-d h:i:s')
        ]);

        // $code = sprintf('%08d', $id);

        // DB::table('tickets')->update(
        //   ['code' => $code]
        // )->where(
        //   [
        //     'id' => $id
        //   ]
        // );

        DB::commit();

        return response()->json(['success' => array('Ticket: $code has been created')]);

      } catch (Exception $e) {
        DB::rollback();
        return response()->json(['error' => array('Cannot create ticket')]);
      }

    }

}
