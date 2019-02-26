<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Illuminate\Http\Response;

class NewsletterController extends Controller
{
    public function subscribe(Request $request) {
      if ($request->isMethod('post')) {
            $email = isset($_POST['mce-EMAIL']) ? $_POST['mce-EMAIL'] : '';
            $output = ['email' => $email];
            $post_data['u'] = $_POST['u'];
            $post_data['id'] = $_POST['id'];
            $post_data['mce-EMAIL'] = urlencode($_POST['mce-EMAIL']);
            foreach($post_data as $key => $value) {
                $post_items[] = $key.'='.$value;
            }
            $post_string = implode('&', $post_items);

            $curl_connection = curl_init('https://loopsider.us17.list-manage.com/subscribe/post');
            curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
            curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
            curl_exec($curl_connection);
            curl_close($curl_connection);
            return response(json_encode($output))
                  ->header('Content-Type', 'application/json')
                  ->header('access-control-allow-credentials', 'true')
                  ->header('access-control-allow-headers', 'Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token')
                  ->header('access-control-allow-methods', 'POST')
                  ->header('access-control-allow-origin', $_SERVER['HTTP_ORIGIN'])
                  ->header('access-control-expose-headers', 'AMP-Access-Control-Allow-Source-Origin')
                  ->header('amp-access-control-allow-source-origin', 'https://'.$_SERVER['HTTP_HOST']);
        }
    }
}
