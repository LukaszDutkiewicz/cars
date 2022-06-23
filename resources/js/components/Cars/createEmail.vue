<template>
    <div>
        <h1>Wyślij wiadomość do SZEFA</h1>
        <form :action="route('email.send')">
            <input type="text" name="emailAdress" id="emailAdress" :value="$emailAdress" hidden>
            <div>
                <label for="username">Nazwa użytkownika</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="userEmail">Email kontaktowy</label>
                <input type="text" name="userEmail" id="userEmail">
            </div>
            <div>
                <label for="title">Tytuł</label>
                <input type="text" name="title" id="title">
            </div>
            <div>
                <label for="message">Treść</label>
                <textarea name="message" id="message"></textarea>
            </div>
            <button type="submit">Wyślij</button>
        </form>
    </div>
</template>
<script>
</script>