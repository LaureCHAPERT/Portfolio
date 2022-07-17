@include('layouts/navbar')
<h1 class="contact-title text-center"> <span >Travaillons ensemble<img class="contact-title-cat mb-4" src="{{ asset('images/cat.svg') }}" alt="logocat "></span></h1>

    <div class="contact container  zoomIn m-auto justify-content-evenly row">
                    <div class="contact-part-one text-center col-lg-6 col-md-6 col-sm-12 mb-4">
                        <ul class="contact-list">
                            <li class="contact-list-item" key="linkedin">
                                <a href="https://www.linkedin.com/in/laurechapert/" >
                                    <img src="{{asset('/images/icons/linkedin.svg')}}" alt="linkedin-logo" class="contact-list-item-image" />
                                </a>
                                <a href="https://www.linkedin.com/in/laurechapert/" class="paragraph-link">
                                    <p class="contact-list-item-title-linked">Linkedin</p>
                                </a>
                            </li>
                            <li class="contact-list-item" key="mail">
                                <img src="{{asset('/images/icons/mail.svg')}}" alt="mail-logo" class="contact-list-item-image"/>
                                <p class="contact-list-item-title">laure.chapert@gmail.com</p>
                            </li>
                            <li class="contact-list-item" key="phone">
                                <img src="{{asset('/images/icons/phone.svg')}}" alt="phone-logo" class="contact-list-item-image" />
                                <p class="contact-list-item-title">06.51.72.57.52 </p>
                            </li>
                            <li class="contact-list-item" key="stackovf">
                                <a href="https://stackoverflow.com/users/18853924/laure-chapert">
                                    <img src="{{asset('/images/icons/stackovf.svg')}}" alt="stackoverflow-logo" class="contact-list-item-image" />
                                </a>
                                <a href="https://stackoverflow.com/users/18853924/laure-chapert" class="paragraph-link">
                                    <p class="contact-list-item-title-linked">StackOverflow</p>
                                </a>
                            </li>
                            <li class="contact-list-item" key="github">
                                <a href="https://github.com/LaureCHAPERT">
                                    <img src="{{asset('/images/skills/github.svg')}}" alt="github logo" class="contact-list-item-image" />
                                </a>
                                <a href="https://github.com/LaureCHAPERT" class="paragraph-link">
                                    <p class="contact-list-item-title-linked">GitHub</p>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="contact-part-two col-lg-5 col-md-10 col-sm12">
                    <a class="contact-part-two-link" href="mailto:laure.chapert@gmail.com"> M'envoyer un mail <img class="arrow-icon " src="{{ asset('images/icons/arrow.svg') }}" alt="arrow-icon"></a> <br>
                    <a class="contact-part-two-link" href="/download"> Télécharger mon CV <img class="arrow-icon " src="{{ asset('images/icons/arrow.svg') }}" alt="arrow-icon"></a> <br>
        </div>
        </div>



    </div>



@include ('layouts/footer')

