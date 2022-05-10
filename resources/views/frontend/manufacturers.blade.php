@extends('layouts.master')
@section('content')
    <main>
        <!-- Inner Hero Section -->
        <section class="inner-hero-section no-overlay no-image">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase text-primary">Manufacturers</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Inner Hero Section -->

        <!-- Manufacturer Listing Section -->
        <section class="section bg-muted manufacturer-list py-5">
            <div class="container">
                <!--<div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2>
                                Manufacturer Listing
                            </h2>
                        </div>
                    </div>
                </div>-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-grp" style="display:none;">
                            <form action="" method="POST">
                                <button class="btn btn-primary btn-big-text active">All Manufactures</button>
                                <div class="input-group">
                                    <input type="text" id="searchManufacturer" name="searchManufacturer" class="form-control" placeholder="Search Manufacture">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="button" id="searchAllManufacturer">
                                            <img class="svgImg" src="{{asset('assets/frontend/assets/images/search.svg')}}" alt="Search">
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="cata-sub-nav">
                            {{-- <div class="nav-prev arrow">
                                <img class="svgImg" src="{{url('/')}}/theme/frontend/assets/images/big-aerrow.svg" alt="Aerrow">
                            </div> --}}
                            <ul>
                                {{-- <li><a href="{{url('/')}}/manufacturers/no" class="nav-item {%if index == 'no'%}active{%endif%}">#</a></li> --}}
                                <li><a href="#no" class="nav-item @if(index == 'no') active @endif">#</a></li>
                                <li><a href="#a" class="nav-item @if(index == 'a') active @endif">A</a></li>
                                <li><a href="#b" class="nav-item @if(index == 'b') active @endif">B</a></li>
                                <li><a href="#c" class="nav-item @if(index == 'c') active @endif">C</a></li>
                                <li><a href="#d" class="nav-item @if(index == 'd') active @endif">D</a></li>
                                <li><a href="#e" class="nav-item @if(index == 'e') active @endif">E</a></li>
                                <li><a href="#f" class="nav-item @if(index == 'f') active @endif">F</a></li>
                                <li><a href="#g" class="nav-item @if(index == 'g') active @endif">G</a></li>
                                <li><a href="#h" class="nav-item @if(index == 'h') active @endif">H</a></li>
                                <li><a href="#i" class="nav-item @if(index == 'i') active @endif">I</a></li>
                                <li><a href="#j" class="nav-item @if(index == 'j') active @endif">J</a></li>
                                <li><a href="#k" class="nav-item @if(index == 'k') active @endif">K</a></li>
                                <li><a href="#l" class="nav-item @if(index == 'l') active @endif">L</a></li>
                                <li><a href="#m" class="nav-item @if(index == 'm') active @endif">M</a></li>
                                <li><a href="#n" class="nav-item @if(index == 'n') active @endif">N</a></li>
                                <li><a href="#o" class="nav-item @if(index == 'o') active @endif">O</a></li>
                                <li><a href="#p" class="nav-item @if(index == 'p') active @endif">P</a></li>
                                <li><a href="#q" class="nav-item @if(index == 'q') active @endif">Q</a></li>
                                <li><a href="#r" class="nav-item @if(index == 'r') active @endif">R</a></li>
                                <li><a href="#s" class="nav-item @if(index == 's') active @endif">S</a></li>
                                <li><a href="#t" class="nav-item @if(index == 't') active @endif">T</a></li>
                                <li><a href="#u" class="nav-item @if(index == 'u') active @endif">U</a></li>
                                <li><a href="#v" class="nav-item @if(index == 'v') active @endif">V</a></li>
                                <li><a href="#w" class="nav-item @if(index == 'w') active @endif">W</a></li>
                                <li><a href="#x" class="nav-item @if(index == 'x') active @endif">X</a></li>
                                <li><a href="#y" class="nav-item @if(index == 'y') active @endif">Y</a></li>
                                <li><a href="#z" class="nav-item @if(index == 'z') active @endif">Z</a></li>
                            </ul>
                            {{-- <div class="nav-next arrow">
                                <img class="svgImg" src="{{url('/')}}/theme/frontend/assets/images/big-aerrow.svg" alt="Aerrow">
                            </div> --}}
                        </div>
                        <!-- <div class="view-all-btn">
                            <button onclick="location.href='{{url('/')}}/manufacturers'" class="btn btn-primary btn-big-text">View All</button>
                        </div> -->
                        <div class="copy-your-files ">
                            <a href="{{url('/')}}/uploads/line-card-files/line-card.PDF" download class="download-files"><img class="svgImg" src="{{asset('assets/frontend/assets/images/download-icon.svg')}}" alt="Download"> Download our Line Card</a>
                        </div>
                        {% for key, manufacturerGroup in manufacturerList %}
                        @if(isset($manufacturerList))
                        @foreach($manufacturerList as $key => $manufacturerGroup)
                        <div class="result-section" id="{{key}}">
                            <div class="section-header text-left">
                                <h2>
                                    @if(isset($key))
                                        <span class="text-primary">#</span>
                                    @else 
                                        <span class="text-primary">{{ strtoupper($key) }}</span>
                                    @endif
                                </h2>
                            </div>
                            <div class="result-wrap">
                                
                                @php
                                $indexCount = 0;
                                @endphp
                                @if(isset($manufacturerGroup))
                                @foreach($manufacturerGroup as $manufacturer)
                                {% for manufacturer in manufacturerGroup %}
                                @if(count($indexCount % 4 == 0%))
                                    {% if indexCount % 4 == 0%}
                                        <div class="result-row">
                                    {% endif %}
                                    @endif
                                    <div class="resut-inner" style="cursor: pointer;" onclick="location.href='{{url('/')}}/manufacturer-detail/{{manufacturer.id}}';">
                                            <h4>
                                                {{ $manufacturer->name }}
                                            </h4>
                                        <div class="img-wrap">
                                            <img style="width: 99px;height: 29px;" src="{{asset('assets/uploads/manufacturer/'. $manufacturer->image) }}" alt="{{ $manufacturer->name }}">
                                        </div>
                                    </div>
                                    @if($indexCount == 3)
                                    {% if indexCount == 3%}
                                        </div>
                                        {% set indexCount = 0 %}
                                    {% else %}
                                    @else
                                        {% set indexCount = indexCount + 1 %}
                                    {% endif %}
                                {% endfor %}
                                @endforeach
                                {% if indexCount % 3 != 0%}
                                    {% set indexCount = indexCount % 3 %}
                                    {% for remainIndexCount in indexCount..3 %}
                                        <div class="resut-inner" style="background: white;">
                                            
                                        </div>
                                        {% if remainIndexCount == 3%}
                                        </div>
                                        {% endif %}
                                    {% endfor %}
                                {% elseif indexCount == 3%}
                                    <div class="resut-inner" style="background: white;">
                                        </div></div>
                                {% endif %}
                            </div>
                        </div>
                        {% endfor %}
                        <div class="copy-your-files">
                            <div class="section-header text-left">
                                <h4>
                                    Want a copy for your files?
                                </h4>
                            </div>
                            <a href="{{url('/')}}/uploads/line-card-files/line-card.PDF" download class="download-files"><img class="svgImg" src="{{asset('assets/frontend/assets/images/download-icon.svg')}}" alt="Download"> Download our Line Card</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Manufacturer Listing Section -->
    </main>
    <!-- End Content -->
    <script>
        $(document).ready(function() {
            $('.nav-item').on('click', function() {
                $('.nav-item').removeClass('active');
                $(this).addClass('active');
            })
        });
    </script>
@endsection