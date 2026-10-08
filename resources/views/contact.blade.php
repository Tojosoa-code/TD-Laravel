<x-layout title="Contact">
    <h1>Contact</h1>
    <form method="POST" action="/contact">
        @csrf
        <label>Nom :</label>
        <input type="text" name="name">
        <button type="submit">Envoyer</button>
    </form>
</x-layout>
