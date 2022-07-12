@include('layouts/navbar')
<h1 class="contact-title text-center "> <span class="the-span "> Travaillons ensemble &#129321</span></h1>

    <div class="contact container  zoomIn m-auto justify-content-evenly row">
                    <div class="contact-part-one text-center col-lg-6 col-md-6 col-sm-12 mb-4">
                        <ul class="contact-list">
                            <li class="contact-list-item" key="linkedin"> <a href="">
                                <img src="{{asset('/images/icons/linkedin.svg')}}" alt="" class="contact-list-item-image" /></a>
                                <p class="contact-list-item-title">Linkedin</p>
                            </li>
                            <li class="contact-list-item" key="linkedin">
                                <img src="{{asset('/images/icons/mail.svg')}}" alt="" class="contact-list-item-image"/>
                                <p class="contact-list-item-title">laure.chapert@gmail.com</p>
                            </li>
                            <li class="contact-list-item" key="linkedin">
                                <img src="{{asset('/images/icons/phone.svg')}}" alt="" class="contact-list-item-image" />
                                <p class="contact-list-item-title">06.51.72.57.52 </p>
                            </li>
                            <li class="contact-list-item" key="stackovf">
                                <img src="{{asset('/images/icons/stackovf.svg')}}" alt="" class="contact-list-item-image" />
                                <p class="contact-list-item-title">StackOverflow</p>
                            </li>
                            <li class="contact-list-item" key="linkedin"> <a href="">
                                <img src="{{asset('/images/skills/github.svg')}}" alt="" class="contact-list-item-image" /></a>
                                <p class="contact-list-item-title">GitHub</p>
                            </li>

                        </ul>
                    </div>
                    <div class="contact-part-two col-lg-5 col-md-10 col-sm12">
                    <a class="contact-part-two-link" href="https://github.com/LaureCHAPERT/Concert-O-Front"> M'envoyer un mail <img class="arrow-icon " src="{{ asset('images/icons/arrow.svg') }}" alt="arrow-icon"></a> <br>
                    <a class="contact-part-two-link" href="https://github.com/LaureCHAPERT/Concert-O-Front"> Télécharger mon CV <img class="arrow-icon " src="{{ asset('images/icons/arrow.svg') }}" alt="arrow-icon"></a> <br>
        </div>
        </div>



    </div>



@include ('layouts/footer')

