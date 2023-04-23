const recognition = new window.webkitSpeechRecognition();
var synth = window.speechSynthesis;
const query = document.getElementById("query");
const textarea = document.getElementById("response_talkgpt");
async function signin() {
    var email = document.getElementById("email").value;
    var psd = document.getElementById("password").value;
    // console.log(email, psd);

    var signin_details = new FormData();
    signin_details.append("email", email);
    signin_details.append("psd", psd);

    var res = await fetch("http://localhost:8000/signin", {
        method: "POST",
        body: signin_details,
    }).then((response) => {
        return response.json();
    });
    console.log(res);
    window.location = res["message"];
}
async function sign_up() {
    var email = document.getElementById("email").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    console.log(email, username, password);

    var sign_up_data = new FormData();
    sign_up_data.append("email", email);
    sign_up_data.append("username", username);
    sign_up_data.append("password", password);

    var res = await fetch("http://localhost:8000/signup", {
        method: "POST",
        body: sign_up_data,
    }).then((response) => {
        return response.json();
    });
    console.log(res);
}
async function start_conversation() {
    query.value = "";
    recognition.continuous = true;
    recognition.lang = "en-US";
    recognition.interimResults = false;
    recognition.start();
    recognition.onresult = async (event) => {
        const speechResult =
            event.results[event.results.length - 1][0].transcript;
        /* console.log(`You said: "${speechResult}"`); */
        document.getElementById("query").value = speechResult;
        // Do something with the speech result

        var query_to_send = new FormData();
        query_to_send.append("query", speechResult);

        var result = await fetch("http://localhost:8000/conversation", {
            method: "POST",
            body: query_to_send,
        }).then((response) => {
            return response.json();
        });

        var r = JSON.stringify(result);
        var r1 = JSON.parse(r);
        var r2 = JSON.parse(r1.res);
        // console.log(r2.response);

        var output = r2.response;

        textarea.value = "";

        // Add the word to the textarea
        textarea.value = output;

        //Text to speech
        var speech = new SpeechSynthesisUtterance(output);
        synth.speak(speech);
        recognition.stop();

        // Speak the text and stop recognition until done
        speech.addEventListener("end", () => {
            synth.cancel(); // Cancel speech synthesis
            query.value = "Listening..."; //Listening
            recognition.start(); // Restart recognition
        });
    };
}
function stop_conversation() {
    recognition.stop();
    synth.cancel();
    textarea.value = "";
    query.value = "";
}
async function feedbacks() {
    var user_name = document.getElementById("user_name").value;
    var user_email = document.getElementById("user_email").value;
    var feedback_subject = document.getElementById("subject").value;
    var feedback_message = document.getElementById("message").value;

    var feedback_data = new FormData();
    feedback_data.append("user_name", user_name);
    feedback_data.append("user_email", user_email);
    feedback_data.append("feedback_subject", feedback_subject);
    feedback_data.append("feedback_message", feedback_message);

    var message = await fetch("http://localhost:8000/contactus", {
        method: "POST",
        body: feedback_data,
    }).then((response) => {
        return response.json();
    });
    alert(message['msg']);
}
