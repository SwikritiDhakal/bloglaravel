<h1>home page</h1>
<a href="/">Welcome</a>
<a href="/about/swikriti">About</a>
@include('common.navbar',["page"=>"this is home"])

<x-message-banner msg="hii from home" type="success"/>


<br><br><br>

<style>
    .success{
        background:cadetBlue;
        color:white;
        padding:20px;
        border-radius: 10px;
    
    }
     .error{
        background:red;
        color:white;
        padding:20px;
        border-radius: 10px;
    
    }

    
    
</style>