<form method="POST" action="{{ route('login') }}">
    @csrf

    <label for="email">Adresse e-mail</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Mot de passe</label>
    <input type="password" name="password" id="password" required>


    <button type="submit">Se Connecter</button>
</form>
