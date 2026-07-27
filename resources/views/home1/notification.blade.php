<!-- ========================= -->
<!--  AI TRADING NOTIFICATION A (Bottom Left - Black & Gold) -->
<!-- ========================= -->

<style>
/* SAFE, CLEAN CSS — NO RESET THAT BREAKS LAYOUT */
.ai-box-a {
    position: fixed;
    bottom: 30px;
    left: 30px;
    z-index: 9999999;
    display: none;
    font-family: "Poppins", sans-serif;
}

.ai-box-a .ai-block {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 15px 20px;
    background: #0d0d0d;
    border: 1px solid #f2c94c;
    border-radius: 12px;
    width: 280px;
    color: white;
    box-shadow: 0 0 12px rgba(242, 201, 76, 0.4);
}

.ai-box-a .ai-title {
    font-size: 15px;
    font-weight: 700;
    color: #f2c94c;
}

.ai-box-a .ai-text {
    font-size: 13px;
    margin-top: 3px;
}
</style>

<div class="ai-box-a" id="ai-box-a">
    <div class="ai-block">
        <i class="fa fa-robot" style="font-size:32px;color:#f2c94c;"></i>
        <div>
            <div class="ai-title">AI Trading Update</div>
            <div class="ai-text"></div>
        </div>
    </div>
</div>


<!-- ========================= -->
<!--  AI TRADING NOTIFICATION B (Top Right - Blue Theme) -->
<!-- ========================= -->

<style>
.ai-box-b {
    position: fixed;
    top: 30px;
    right: 30px;
    z-index: 9999999;
    display: none;
    font-family: "Poppins", sans-serif;
}

.ai-box-b .ai-block {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 15px 20px;
    background: #1a73e8;
    border: 1px solid #ffffff;
    border-radius: 12px;
    width: 280px;
    color: white;
    box-shadow: 0 0 10px rgba(0,0,0,0.35);
}

.ai-box-b .ai-title {
    font-size: 15px;
    font-weight: 700;
    color: #ffffff;
}

.ai-box-b .ai-text {
    font-size: 13px;
    margin-top: 3px;
}
</style>

<div class="ai-box-b" id="ai-box-b">
    <div class="ai-block">
        <i class="fa fa-arrow-trend-up" style="font-size:32px;color:white;"></i>
        <div>
            <div class="ai-title">Market Signal</div>
            <div class="ai-text"></div>
        </div>
    </div>
</div>


<!-- ========== SCRIPTS ========== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>

<script>
const names = ["Michael","Daniel","Lucas","Samantha","Grace","Ethan","Ariana","David","Sophia"];
const countries = ["USA","UK","Canada","Germany","UAE","South Africa","France","Netherlands"];

function pick(list){ return list[Math.floor(Math.random()*list.length)]; }
function money(min,max){ return (Math.random()*(max-min)+min).toFixed(2); }

let toggleA = true;
let toggleB = false;

function showA(){
    let name = pick(names);
    let country = pick(countries);
    let amount = toggleA ? money(100,6000) : money(300,15000);

    let msg = toggleA
        ? `${name} from ${country} earned $${amount} with AI Trading`
        : `${name} from ${country} withdrew $${amount} successfully`;

    toggleA = !toggleA;

    $("#ai-box-a .ai-text").html(msg);
    $("#ai-box-a").fadeIn(500);
    setTimeout(()=>$("#ai-box-a").fadeOut(500), 4500);
}

function showB(){
    let name = pick(names);
    let amount = toggleB ? money(30,500) : money(100,2500);

    let msg = toggleB
        ? `${name} made a quick profit of $${amount}`
        : `${name} just received a strong AI trading signal`;

    toggleB = !toggleB;

    $("#ai-box-b .ai-text").html(msg);
    $("#ai-box-b").fadeIn(500);
    setTimeout(()=>$("#ai-box-b").fadeOut(500), 4500);
}

setInterval(showA, 7000);
setInterval(showB, 9000);
</script>
