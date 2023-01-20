{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
  @include('sections.header')
  <div class="bg-pfd-very-dark-shade font-pfd-baskervville pb-[50px]">
    <div class="min-h-screen pt-[170px] flex flex-col items-center">
      <div class="">
        <img src="@asset('images/img-home.png')"/>
      </div>

      <div class=" text-white text-center mt-8">
        <p class="text-title-1 tracking-[0.09rem]">Hello! I'm <span class="block text-title-2 -mt-[10px] -mb-[12px]">Filipe Davi</span> Web Developer</p>
      </div>

      <a href="https://github.com/WKFilipeDavi" target="_blank"
      class="text-pfd-green-yellow text-title-1 tracking-[0.09rem]
      py-3 px-10 bg-pfd-dark-shade rounded-[22px] mt-12
      ">Github</a>
    </div>

    <div class="min-h-screen flex items-center">
      <div id="home-who" class="pt-4 pb-6 px-8 mt-10 bg-pfd-dark-shade rounded-[61px] min-h-[400px]">
        <h2 class="text-white text-center text-title-3"> &ltWho am i? /&gt </h2>

        <div class="text-white mt-4">
          {!! $whoAmI !!}
        </div>
      </div>
    </div>

    <span class="text-white text-[36px] flex justify-center">&lt!-- &nbsp &nbsp --/&gt</span>

    <div class="min-h-screen flex items-center">
      <div class="w-full neon-object pt-4 pb-6 px-8 mt-10 bg-pfd-dark-shade rounded-[61px] min-h-[400px]">
        <h2 class="text-white text-center text-title-3"> &ltPortfolio /&gt </h2>
        <!-- Slider main container -->
          <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

            @if($projects)
              @foreach($projects as $project)
                @php
                  $terms = get_the_terms($project, 'project_type');
                  $gh_link = get_field('github_link', $project);
                  $on_link = get_field('on_link', $project);
                @endphp

                <div class="swiper-slide">
                  <div class="px-5">
                    <span class="text-white text-right block">{{$loop->iteration}}/{{$loop->count}}</span>
                    <div class="bg-gray-300 aspect-[3/2]">{!! get_the_post_thumbnail($project, 'full', array('class' => 'h-full')) !!}</div>
                  </div>

                  <div class="text-white text-center mt-2 px-5">
                    <h3 class="text-title-1">{{get_the_title($project)}} </h3>
                    <p class="text-subtitle-1">@if($terms) @foreach($terms as $term) @if($loop->iteration > 1), @endif {{ $term->name }} @endforeach @endif</p>
                    <div class="mt-4 mb-[18px]">
                      <p class="text-justify">Mussum Ipsum, cacilds vidis litro abertis.
                        Viva Forevis aptent taciti sociosqu ad litora torquent.
                        Não sou faixa preta cumpadi,
                        sou preto inteiris, inteiris.Paisis, filhis,
                        espiritis santis.Admodum accumsan disputationi eu sit.
                        Vide electram sadipscing et per.
                      </p>
                      <a href="#" class="block text-right">+ More</a>
                    </div>

                    <a href="{{$on_link}}" class="block text-left text-content-1"><i class="fa-solid fa-link text-pfd-green-yellow"></i> <span class="underline">Link no Ar </span></a>
                    <a href="{{$gh_link}}" class="block text-left mt-[10px] text-content-1"><i class="fa-solid fa-link text-pfd-green-yellow"></i> <span class="underline"> Link Github </span></a>
                  </div>
                </div>
              @endforeach

            @endif
              <!-- Slides -->
              <div class="swiper-slide">
                <div class="px-5">
                  <span class="text-white text-right block">n/16</span>
                  <div class="bg-gray-300 aspect-[3/2]">img</div>
                </div>

                <div class="text-white text-center mt-2 px-5">
                  <h3 class="text-title-1">Titulo</h3>
                  <p class="text-subtitle-1">Tag: Em casa / No trabalho</p>
                  <div class="mt-4 mb-[18px]">
                    <p class="text-justify">Mussum Ipsum, cacilds vidis litro abertis.
                      Viva Forevis aptent taciti sociosqu ad litora torquent.
                      Não sou faixa preta cumpadi,
                      sou preto inteiris, inteiris.Paisis, filhis,
                      espiritis santis.Admodum accumsan disputationi eu sit.
                      Vide electram sadipscing et per.
                    </p>
                    <a href="#" class="block text-right">+ More</a>
                  </div>

                  <a href="#" class="block text-left text-content-1">Link no Ar</a>
                  <a href="#" class="block text-left mt-[10px] text-content-1">Link Github</a>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="px-5">
                  <span class="text-white text-right block">n/16</span>
                  <div class="bg-gray-300 aspect-[3/2]">img</div>
                </div>

                <div class="text-white text-center mt-2 px-5">
                  <h3 class="text-title-1">Titulo</h3>
                  <p class="text-subtitle-1">Tag: Em casa / No trabalho</p>
                  <div class="mt-4 mb-[18px]">
                    <p class="text-justify">Mussum Ipsum, cacilds vidis litro abertis.
                      Viva Forevis aptent taciti sociosqu ad litora torquent.
                      Não sou faixa preta cumpadi,
                      sou preto inteiris, inteiris.Paisis, filhis,
                      espiritis santis.Admodum accumsan disputationi eu sit.
                      Vide electram sadipscing et per.
                    </p>
                    <a href="#" class="block text-right">+ More</a>
                  </div>

                  <a href="#" class="block text-left text-content-1">Link no Ar</a>
                  <a href="#" class="block text-left mt-[10px] text-content-1">Link Github</a>
                </div>
              </div>

            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination swiper-pagination--static "></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
      </div>
    </div>



  </div>
@endsection
