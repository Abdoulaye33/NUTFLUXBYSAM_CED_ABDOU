<form method="POST" action="{{ route('register') }}">
    @csrf

    <label for="name">Nom d'utilisateur</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Adresse e-mail</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Mot de passe</label>
    <input type="password" name="password" id="password" required>


    <button type="submit">S'inscrire</button>
</form>
