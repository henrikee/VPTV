<form class="diaryMark" method="post">
    <div>
        <div>
            <label class="diaryMarkingLabel">Sukupuoli</label><br>
            <div class="radio-group">
                <div>
                    <input value="mies" access="false" name="givenGender" type="radio" checked="unchecked">
                    <label class="diaryMarkingLabel">Mies</label>
                </div>
                <div>
                    <input value="nainen" access="false" name="givenGender" type="radio">
                    <label class="diaryMarkingLabel">Nainen</label>
                </div>
                <div>
                    <input value="muu" name="givenGender" access="false" type="radio">
                    <label  class="diaryMarkingLabel">Muu</label>
                </div>
            </div>
        </div>
        <div>
            <label class="diaryMarkingLabel">Ikä<br></label>
            <input type="text" name="givenAge" class="markingTxt" access="false">
        </div>
        <div>
            <label class="diaryMarkingLabel">Pituus (cm)<br></label>
            <input type="text" name="givenHeight" class="markingTxt" access="false">
        </div>
        <div>
            <label class="diaryMarkingLabel">Paino (kg)<br></label>
            <input type="text" name="givenWeight" class="markingTxt" access="false">
        </div>
        <div>
            <label class="diaryMarkingLabel">Vyötärönympärys (cm)<br></label>
            <input type="text" name="givenWaistCircuit" class="markingTxt" access="false">
        </div>
        <label class="diaryMarkingLabel">Systolinen (yläpaine) (Hgmm)<br></label>
        <input type="text" name="givenSystolic" class="markingTxt" access="false">
    </div>
    <label class="diaryMarkingLabel">Diastolinen (alapaine) (Hgmm)<br></label>
    <input type="text" name="givenDiastolic" class="markingTxt" access="false"><br>
    <button type="submit" name="submitHealthydata" class="btn" value="Tallenna">Tallenna terveystiedot</button>
    <button type="submit" name="resetHealthydata" class="btn" value="Peruuta">Hylkää terveystiedot</button>
    </div>
    </div>
</form>