@include('layouts/navbar')

        <div class="container-fluid ">

                <div class=""><img class="presentation-img " src="{{ asset('images/presentation.jpg') }}" alt="myself"></div>

                <div class="presentation-paragraph zoomIn">
                    <h1> Bonjour !</h1> <br>
                    <p class="paragraph">Je m'appelle Laure Chapert. <br> Récemment diplômée du titre de développeur web et web mobile, je suis en pleine recherche d'emploi en full remote idéalement !
                    Si vous souhaitez en apprendre un peu plus sur mon parcours, rendez-vous <a href="/apropos">ICI</a> !
                    <h2>{{__("messages.title")}}</h2>
                    </p>

                </div>
                {{--<div class="">
                    <h1> Hello !</h1> <br>
                    <p class="paragraph">I'm Laure Chapert, recently graduated from the web and mobile web developer diploma and looking for a full remote job! </p>
                    </div>--}}
        </div>
@include ('layouts/footer')
<script>

function changeLanguage(lang){
    window.location='{{url("change-language")}}/'+lang;
}
</script>
