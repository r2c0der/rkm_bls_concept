/**
 * @developer Rayvn Manuel
 * @purpose TECHNICAL PORTFOLIO - Bureau of Labor Statistics | Concept Site
 * @copyright 2016
 * @fileName rkm_bls_app.js
 *
 */


function printBLSName(){
    var bls = document.getElementById("bls_search");
    var bureauName = $(bls).text();
    var B = bureauName.charAt(1);
    var L = bureauName.charAt(11);
    var S = bureauName.charAt(17);
    var blsBeginning = bureauName.slice(2,10);
    var blsMiddle = bureauName.slice(12,16);
    var blsEnd = bureauName.slice(18,27);

    var blsBureau = '<strong class="rkm_bls_styleFirst">'+B+'</strong>'+blsBeginning;
    var blsLabor = '<strong class="rkm_bls_styleFirst">'+' '+ L +'</strong>'+blsMiddle;
    var blsStatistics = '<strong class="rkm_bls_styleFirst">'+' '+S+'</strong>'+blsEnd;

    document.getElementById('bls').innerHTML = blsBureau.concat(blsLabor,blsStatistics);

}
