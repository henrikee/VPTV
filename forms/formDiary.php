<form class="diaryMark" method="post">
        <div>
                <div>
                        <!-- <label class="diaryMarkingLabel">Päivämäärä</label><br>
                        <input name="givenDate" class="markingTxt" type="date"><br> -->
                        <label class="diaryMarkingLabel">Mitä liikuntaa harrastit tänään?<br></label>
                        <input type="text" name="givenEx" class="markingTxt" access="false">
                </div>
                <div>
                        <label class="diaryMarkingLabel">Treenin kesto minuutteina<br></label>
                        <input name="givenLength" type="text" class="markingTxt" access="false">
                </div>
                <div>
                        <label class="diaryMarkingLabel">Syke 2 min treenin jälkeen<br></label>
                        <input name="givenPulse" type="text" class="markingTxt" access="false">
                </div>
                <div class="">
                        <label class="diaryMarkingLabel">Söitkö terveellisesti tänään? Mitä söit?<br></label>
                        <input type="text" name="givenMeal" class="markingTxt" access="false">
                </div>
                <div class="">
                        <label class="diaryMarkingLabel">Miten nukuit viime yönä? <br></label>
                        <input type="text" class="markingTxt" name="givenSleep" access="false">
                </div>
                <div><label class="diaryMarkingLabel">Unen kesto viime yönä<br></label>
                        <div>
                                <div>
                                        <input access="false" name="givenSleepLength" type="radio" checked="checked" value="alle 5h">
                                        <label class="diaryMarkingLabel">alle 5h</label>
                                </div>
                                <div><input access="false" name="givenSleepLength" type="radio" value="6-8h">
                                        <label class="diaryMarkingLabel">6-8 h</label>
                                </div>
                                <div class="formbuilder-radio">
                                        <input access="false" name="givenSleepLength" type="radio" value="yli 8h">
                                        <label class="diaryMarkingLabel">yli 8h</label>
                                </div>
                        </div>
                </div>
                <button type="submit" name="submitEx" class="btn" value="Tallenna">Tallenna</button>
                <button type="submit" name="ResetEx" class="btn" value="Peruuta">Peruuta</button>
        </div>
</form>