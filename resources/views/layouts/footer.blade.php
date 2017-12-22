<footer>

    @if(isset($admin))
        <div class="copyright-info">
            © 2017 Copyright: <a href="#"><strong> Márcia da Silva</strong></a>
        </div>
    @else
        <section id="social-info">
            <p>Visite-nos nas redes sociais</p>

            <div>
                <a
                    @foreach($companies as $company)
                        @if(isset($company->facebook))
                            href="{{$company->facebook}}"
                        @else
                            href="www.facebook.com"
                        @endif
                    @endforeach>
                    <i class="fa fa-facebook margin-left-right"> </i>
                </a>
                <a
                        @foreach($companies as $company)
                            @if(isset($company->twitter) )
                                href="{{$company->twitter}}"
                            @else
                                href="https://www.twitter.com"
                            @endif
                        @endforeach>
                    <i class="fa fa-twitter margin-left-right"> </i>
                </a>
                {{--<a><i class="fa fa-google-plus margin-left-right"> </i></a>--}}
                <a
                        @foreach($companies as $company)
                            @if(isset($company->linkedin) )
                            href="{{$company->linkedin}}"
                            @else
                            href="https://www.linkedin.com"
                            @endif
                        @endforeach>
                    <i class="fa fa-linkedin margin-left-right"> </i>
                </a>
                <a
                        @foreach($companies as $company)
                            @if(isset($company->instagram) )
                                href="{{$company->instagram}}"
                            @else
                                href="https://www.instagram.com"
                            @endif
                        @endforeach>
                    <i class="fa fa-instagram margin-left-right"> </i>
                </a>
            </div>
        </section>


        <section id="company-info">
            <div>
                <h6>Delicada Mulher</h6>
                <hr>
                <p>LOGO</p>
            </div>

            <div class="categories-list">
                <h6><a href="/categories">Categorias</a></h6>
                <hr>
                @foreach($categories as $category)
                    <p><a href="/products/{{$category->id}}">{{$category->name}}</a></p>
                @endforeach
            </div>

            <div>
                <h6>Links Uteis</h6>
                <hr>
                <p><a href="#">Sobre</a></p>
                <p><a href="/contact">Agende uma visita</a></p>
                <p><a href="/products">Novidades</a></p>
                <p><a href="#">Ajuda</a></p>
            </div>
            <div >
                <h6>Contato</h6>
                <hr>
                <p><i class="fa fa-home"></i>
                    @foreach($companies as $company)
                        @if(isset($company->address))
                            {{$company->address}}
                        @else
                            Ijuí, Rio Grande do Sul, BR
                        @endif
                    @endforeach
                </p>
                <p><i class="fa fa-envelope"></i>
                    @foreach($companies as $company)
                        @if(isset($company->email))
                            {{$company->email}}
                        @else
                            marcia@admin.com
                        @endif
                    @endforeach
                </p>
                <p><i class="fa fa-phone"></i>
                    @foreach($companies as $company)
                        @if(isset($company->phone))
                            {{$company->phone}}
                        @else
                            + 55 55 99999-9999
                        @endif
                    @endforeach
                </p>
            </div>

        </section>

        <div class="copyright-info">
            © 2017 Copyright: <a href="#"><strong> Márcia da Silva</strong></a>
        </div>
    @endif

</footer>
