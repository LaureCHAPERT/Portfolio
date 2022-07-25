<body>
     <h1>Laravel multi language web with example -readerstacks.com </h1>
    <div>
        Langauge : <select onchange="changeLanguage(this.value)" >
            <option {{session()->has('lang_code')?(session()->get('lang_code')=='en'?'selected':''):''}} value="en">English</option>
            <option {{session()->has('lang_code')?(session()->get('lang_code')=='fr'?'selected':''):''}} value="fr">French</option>
            <option {{session()->has('lang_code')?(session()->get('lang_code')=='es'?'selected':''):''}} value="es">Spanish</option>
        </select>
    </div>

    <h2>{{__("messages.title")}}</h2>

    </body>
   <script>

    function changeLanguage(lang){
        window.location='{{url("change-language")}}/'+lang;
    }
    </script>
