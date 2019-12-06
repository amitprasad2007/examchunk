<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
Use App\User;
use Session;
use App\Models\Freedemo;
use App\Models\Enquiry;
class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function page()
    {$settings = DB::table('settings')->where([['is_deleted','=',0]])->get();
        $features = DB::table('features')->where([['is_deleted','=',0],['is_active','=',1]])->orderBy('id', 'asc')->take(6)->get();
        $subscriptions = DB::table('subscriptions')->where([['is_deleted','=',0],['is_active','=',1]])->get();

        return view('pages.index',compact('settings','features','subscriptions'));
        //
    }

public function about() {

        return view('pages.about');
    }       

    public function contact() {

        $settings = DB::table('settings')->where([['is_deleted','=',0]])->get();

        return view('pages.contact',compact('settings'));
    } 

    public function demo() {

        return view('pages.demo');
    } 

    public function trial() {

        return view('pages.trial');
    } 

public function faqs() {
        $faqs1 = DB::table('faqs')->where([['is_deleted','=',0],['is_active','=',1],['type','=',1]])->get();
        $faqs2 = DB::table('faqs')->where([['is_deleted','=',0],['is_active','=',1],['type','=',2]])->get();
        $faqs3 = DB::table('faqs')->where([['is_deleted','=',0],['is_active','=',1],['type','=',3]])->get();
        $faqs4 = DB::table('faqs')->where([['is_deleted','=',0],['is_active','=',1],['type','=',4]])->get();
        return view('pages.faqs',compact('faqs1','faqs2','faqs3','faqs4'));
    } 
     public function career() {

        return view('pages.career');
    } 

    public function support() {

        return view('pages.support');
    }

    public function terms() {
        $settings = DB::table('settings')->where([['is_deleted','=',0]])->get();

        return view('pages.terms',compact('settings'));
    } 

    public function privacy() {
        $settings = DB::table('settings')->where([['is_deleted','=',0]])->get();

        return view('pages.privacy',compact('settings'));
    } 

    public function pricing() {

        $subscriptions = DB::table('subscriptions')->where([['is_deleted','=',0],['is_active','=',1]])->get();

        return view('pages.pricing',compact('subscriptions'));
    }

    public function features() {

        $features = DB::table('features')->where([['is_deleted','=',0],['is_active','=',1]])->get();

        return view('pages.features',compact('features'));
    }

    public function free_demo_enquiry_submit(Request $request){
        $input = $request->all();
        $input['is_active'] = 1;

        Freedemo::create($input);

        Session::flash('message', 'Thank you for submitting your request, Our team will get back you very soon');
        Session::flash('alert-class', 'alert-success');
        return redirect('/request-demo');
    } 

public function trial_submit(Request $request){
        // $input = $request->all();
        // $otp = '123456';

        // $input['otp'] = $otp;
        // $input['is_active'] = 1;

        // Trial::create($input);

        // return redirect('otp-verification?code='.base64_encode($input['mobile']));

        if ($request->input()) {
            $input = $request->all();
            $existuseremailcheck = User::where([['email', '=', $input['email']]])->first();
            if($existuseremailcheck) {
                Session::flash('message', 'This email id already exists. Please try with a different email id.'); 
                Session::flash('alert-class', 'alert-warning');
                return redirect('trial');
            }

            //echo '<pre>'; print_r($request->input()); die;
            
            $input['is_active'] = 1;
            $input['role'] = 1;
            $input['phone_number'] = $input['mobile'];
            $input['expiry_date'] = date("Y-m-d", strtotime("+30 day"));;
            $pass =  $input['password'];
            $input['password'] =bcrypt($input['password']);
            $id = User::create($input)->id;


            $input1 = array();
            $input1['company_id'] = $id;
            $input1['website'] = $input['website_url'];
            $input1['is_active'] = 1;

            DB::table('company_settings')->insert($input1);
            $to = $input['email'];
            $subject = 'Welcome to Exam Chunk';
            $message = '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Hi!</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Welcome to EXAMCHUNK! You have just signed up for the best online assessment portal/software in THE UNIVERSE! Allow us from here onwards to take you on the smoothest assessing journey of all time! So let&rsquo;s get rolling shall we? To begin <a href="http://www.examchunk.com/admin">click here<a/>.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Thank You for choosing us!</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">TEAM EXAM CHUNK.</span></span></p>
';
            $header = "From: Examchunk Info<info@examchunk.com> \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";
            $retval = mail($to, $subject, $message, $header); 
            
            //echo "mail ".$retval;
            //die();
            Session::flash('message', 'You have registered successfully with us. Please login to admin panel for manage exams.');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin');  
        }
        return View::make('members.create'); 
    }  

    public function contact_submit(Request $request){
        $input = $request->all();
        $input['is_active'] = 1;

        Enquiry::create($input);

        Session::flash('message', 'Thank you for submitting your message, Our team will get back you very soon');
        Session::flash('alert-class', 'alert-success');
        return redirect('contact-us');
    }  

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
        //
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
}
