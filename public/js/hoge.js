$(function() {
    $('.sample').focus(function() {
        monitoring($(this));
    });
    $('.sample').blur(function() {
        monitoringClear($(this));
    });

});

var monitoringTimer;
// 入力エリアの監視
function monitoring(ele) {
    // 変更前の文字列
    var before = ele.val();
    // 現在の文字列
    var current = ele.val();
    monitoringTimer = setInterval(function() {
        // 現在の文字列取得
        current = ele.val();
        // 変更があった場合
        if(before != current) {
            // 文字列の変換
            current = convertStr(ele.val());
            // 各値の上書き
            before = current;
            ele.val(current);
        }
    }, 10);
}
// 入力エリアの監視終了
function monitoringClear(ele) {
    clearInterval(monitoringTimer);
}

// 変換処理
function convertStr(str) {
    var halfStr = str.replace(/あ/g, 'a').replace(/い/g, 'i').replace(/う/g, 'u').replace(/え/g, 'e').replace(/お/g, 'o').replace(/[Ａ-Ｚａ-ｚ０-９]/g, function(s) {
        return String.fromCharCode(s.charCodeAt(0)-0xFEE0);
    });
    return halfStr;
}