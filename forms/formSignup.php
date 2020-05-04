<!-- Lomakkeen otsikot ja niiden tunnukset, jotka yhdistetään kirjautumiskoodeihin -->
<!-- login/createaccount headers and ids that are connected to the registeration codes -->
<form method="post">
<div class="form">
<label id="labelUsername" for="formUsername">Käyttäjätunnus</label>
<input type="text" name="givenUsername" id="formUsername" maxlength="40" placeholder="Keksi tähän oma käyttäjänimesi." required/>
<label id="labelEmail" for="formEmail">Sähköposti</label>
<input type="text" name="givenEmail" id="formEmail" maxlength="40" placeholder="Kirjoita tähän sähköpostiosoitteesi." required/>
<label id="labelPassword" for="formPassword">Salasana</label>
<input type="password" id="formPassword"  name="givenPassword"  maxlength="40" placeholder="Keksi itsellesi salasana." required/>
<label id="labelPasswordVerify" for="formPasswordVerify">Salasana uudestaan</label>
<input type="password" id="formPasswordVerify" name="givenPasswordVerify" maxlength="40" placeholder="Kirjoita salasana uudestaan." required/>
<button type="submit" name="submitUser" class="btn" value="Tallenna">Tallenna</button>
<button type="reset" class="btn" value="Hylkää muutokset">Hylkää muutokset</button>
</div>
</form>
