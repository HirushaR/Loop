var editor = ace.edit("editor");
var language = $('#language').val();
console.log(language);
$('#iframecolor').change(function () {
    iframebody.style.color = $(this).val();
});

$('#iframeback').change(function () {
    $('#iframe').css('background', $(this).val());
});


function encode(str) {
    return btoa(unescape(encodeURIComponent(str || "")));
}

function decode(bytes) {
    var escaped = escape(atob(bytes || ""));
    try {
        return decodeURIComponent(escaped);
    } catch {
        return unescape(escaped);
    }
}
function coderesult() {
    $('#loading').fadeIn(300);
    var sourceValue = encode(editor.getValue());
    var lang = language;
    var stdinValue = encode($('#summernote').val());
    var languageId = parseInt(lang);
    var compilerOptions = '';
    var commandLineArguments = '';

    var data = {
        source_code: sourceValue,
        language_id: languageId,
        stdin: stdinValue,
        compiler_options: compilerOptions,
        command_line_arguments: commandLineArguments
    };

    $.ajax({
        url: 'https://api.judge0.com/submissions?base64_encoded=true&wait=false',
        type: "POST",
        async: true,
        contentType: "application/json",
        data: JSON.stringify(data),
        success: function (data, textStatus, jqXHR) {
            setTimeout(fetchSubmission.bind(null, data.token), 1000);
        }
    });

}

function fetchSubmission(submission_token) {
    $.ajax({
        url: "https://api.judge0.com/submissions/" + submission_token + "?base64_encoded=true",
        type: "GET",
        async: true,
        success: function (data, textStatus, jqXHR) {
            if (data.status.id <= 2) { // In Queue or Processing
                setTimeout(fetchSubmission.bind(null, submission_token), 1000);
                return;
            }
            handleResult(data);
        }
    });
}


function handleResult(data) {
    timeEnd = performance.now();
    // console.log("It took " + (timeEnd - 200) + " ms to get submission result.");

    var status = data.status;
    var stdout = decode(data.stdout);
    var stderr = decode(data.stderr);
    var compile_output = decode(data.compile_output);
    var sandbox_message = decode(data.message);
    var time = (data.time === null ? "-" : data.time + "s");
    var memory = (data.memory === null ? "-" : data.memory + "KB");
    var final_output = "";
    console.log(compile_output);
    if (compile_output == '' || compile_output == null) {
        final_output = stdout;
    }
    else {
        final_output = compile_output;
    }


    var executableoutput = " </strong>" + final_output + "<strong/>";
    setOutput(executableoutput);
}

function setOutput(output) {
    var idoc = document.getElementById('iframe').contentWindow.document;
    idoc.open();
    $('#loading').delay(300).fadeOut(300, function () {
        idoc.write(output);
        idoc.close();
    });
}


