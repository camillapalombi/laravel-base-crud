ciao sono l'index

@foreach ($comics as $comic)
                <div class="single-card">
                    <ul>
                        <li> <h3> {{ $comic->title }} </h3> </li>
                        <li> {{ $comic->description }}</li> 
                    </ul>
                </div>
            @endforeach