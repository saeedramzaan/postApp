<x-app>

    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 lg:gap-3 md:gap-0">
            <div class="flex justify-center  border-2 border-gray-300 rounded-xl  bg-gray-100 col-span-4 mb-8 ...">

                <div class="cont-cls">
                    <h2 class="text-1xl"><strong> Contacts </strong> </h2><br>

                    @for ($i = 0; $i < 10; $i++)

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12">
                            <div
                                class="flex justify-center border-2 border-gray-300  rounded-xl bg-gray-100 col-span-3 pt-5 ...">

                                @if (isset($contact['1'][$i]))
                                    <img width="62px" height="62px" src="{{ $contact['1'][$i] }}">
                                @endif
                                
                            </div>
                            <div class="flex justify-center items-center  border-2 border-gray-300 rounded-xl bg-gray-100 col-span-9"
                                style="display: flex; align-items:center">
                                <div class="flex grid grid-cols-1  rounded-xl w-screen" style="margin-bottom: 30px">

                                    <h6><label><strong>User Name :</strong></label>{{ $contact['0'][$i]['username'] }}
                                    </h6>
                                    <h6><label><strong>Email : </strong></label> {{ $contact['0'][$i]['email'] }}
                                    </h6>
                                    <h6><label><strong>Address : </strong></label>
                                        {{ $contact['0'][$i]['address']['street'] . ' ' . $contact['0'][$i]['address']['suite'] . ' ' . $contact['0'][$i]['address']['city'] . '' }}
                                    </h6><br>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-span-5 mb-8 ...">
                @include ('_publish-post')
                @include ('_timeline')
            </div>
            <div class="col-span-3">
                @auth
                    @include ('_picsm-post')
                @endauth
            </div>
        </div>
    </div>

</x-app>
