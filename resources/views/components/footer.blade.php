<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h4 class="color-owner">About</h4>
                <p class="text-justify color-owner">Siamo un gruppo di appassionati di tecnologia, cultura e intrattenimento che ha deciso di creare un blog per condividere la propria conoscenza e passione con il mondo. Il nostro obiettivo è fornire ai nostri lettori informazioni e articoli adeguati, utili per comprendere le tendenze più recenti e le ultime novità in questi ambiti.</p>
            </div>
            
            <div class="col-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="{{route('homepage')}}">Home</a></li>
                    <li><a href="{{route('article.index')}}">Tutti i nostri articoli</a></li>
                    {{-- @foreach ($users as $user)
                        <li><a href="{{route('article.byUser', ['user'=>$user->id])}}">Articoli per autore</a></li>
          
                    @endforeach --}}
                    
                    
                    @if (Auth::check())
                 
                       
                 
                    <li><a href="{{route('careers')}}">Lavora con noi</a></li>
                    @endif
                </ul>
            </div>
            
            <div class="col-6 col-md-3">
                <h6>Social Links</h6>
                <ul class="footer-links">
                    <li>
                        <a class="linkedin" target="_blank" href="https://www.linkedin.com/in/vincenzo-liso95/">
                            <i class="fa fa-linkedin pe-1"></i> 
                            Vincenzo Liso  
                        </a>
                    </li>
                    <li>
                        <a class="linkedin" target="_blank" href="https://www.linkedin.com/in/antonino-spagna-612221267/">
                            <i class="fa fa-linkedin pe-1"></i>
                            Antonino Spagna
                        </a>
                    </li>
                    <li>
                        <a class="linkedin" target="_blank" href="https://www.linkedin.com/in/andrea-baruffo-73520a267/">
                            <i class="fa fa-linkedin pe-1"></i>
                            Andrea Baruffo
                        </a>
                    </li>
                    <li>
                        <a class="linkedin" target="_blank" href="https://www.linkedin.com/in/carmine-gonnella-00821a267/">
                            <i class="fa fa-linkedin pe-1"></i>
                           Carmine Gonnella 
                        </a>
                    </li>
                    <li>
                        <a class="linkedin" target="_blank" href="https://www.linkedin.com/in/davide-liucci-9470761b4/">
                            <i class="fa fa-linkedin pe-1"></i>
                            Davide Liucci
                        </a>
                    </li>
                    <li>
                        <a class="linkedin" target="_blank" href="https://www.linkedin.com/in/diego-dell-aquila-03312a199/">
                            <i class="fa fa-linkedin pe-1"></i>
                            Diego Dell'Aquila
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text color-owner">Copyright &copy; 2023 All Rights Reserved by 
                    The Aulab Post
                </p>
            </div>        
        </div>
    </div>
</footer>