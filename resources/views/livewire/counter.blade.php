<div class="container">
<h1>¿Cuánto dinero le transferirás a Giselle?</h1>
    <p id="counter">{{ $counter }} €</p>
    <div id="buttonContainer">
        <button class="Button" wire:click="increment">Increment</button>
        <button class="Button" wire:click="decrement">Decrement</button>
        <button class="Button" wire:click="textShow">Reset</button>
    </div>
    
    <p> {{$text}} </p>

</div>