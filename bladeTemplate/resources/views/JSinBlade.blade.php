{{-- Lets learn how can we use JS in blade  --}}

@php
    $user = "Adam Rock";
    $fruits = ["Apple", "Banana", "Orange", "Peach"];

    @endphp

<h2>Hello</h2>

<script>
    // var data = @json($fruits);

    var data = {{ Js::from($fruits) }}

    data.forEach(element => {
        console.log(element);
    });
    console.log(data);
</script>