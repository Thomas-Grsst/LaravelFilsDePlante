@props(['route' => '#'])

<a href="{{$route}}" class="inline-block bg-accent text-white p-[0.8rem]-[1.5rem] rounded-[30px] no-underline font-semibold transition-all duration-300 p-3
                    hover:bg-[#f57c00] hover:-translate-y-[3px] hover:shadow-[0]-[6px]-[12px]-[rgba(0,0,0,0.2)]"
>{{$slot}}</a>