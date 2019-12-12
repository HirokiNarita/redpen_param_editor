//連続する文章の主語が同一の場合にエラーを出力するvalidator
//created by Sawano.

var pre_subject = ""; //前の文の主語

function validateSentence(sentence) {
    var subject_flag = false;
    for (var i = 0; i < sentence.tokens.length-1; i++) {
        if (subject_flag = true) break;
        if (sentence.tokens[i].tags[0] == '名詞' &&
            sentence.tokens[i+1].tags[0] == '助詞' &&
            sentence.tokens[i+1].tags[1] == '係助詞') {
            
            var current_subject = sentence.tokens[i].surface + sentence.tokens[i+1].surface;
            //前の文章と主語が一致していたらエラー出力
            if (pre_subject == current_subject) {
                addError("同一の主語が繰り返されている可能性があります．その場合は変更してください．「"+pre_subject + "」", sentence);
                subject_flag = true;
            }
            //主語の更新
            pre_subject = current_subject;
        }

    }

}