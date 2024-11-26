
document.querySelector("#response").style.display = 'none';
const apiKey = "";
let conversationHistory = [];
document.querySelector("#questionButton").addEventListener("click", async () => {
const response = document.querySelector("#response");
const question = document.querySelector("#question").value;
document.querySelector("#response").style.display = 'block';
response.innerHTML = "Wait a moment...";


let dataContnet = data.map(testData => {

  return ` <br>${testData.card_link} ${testData.card_link}<br>${testData.local_number} <br>${testData.status_name} <br>${testData.area_usable} <br>${testData.area} <br>${testData.rooms} <br>${testData.floor} <br>${testData.type} <br> ${testData.building}<br> ${testData.id}`
  
}).join(`\n`)






  
conversationHistory.push(` Question:  ${question}`);




const apiResponse = await fetch("https://api.openai.com/v1/chat/completions", {
method: "POST",
headers: {
"Content-Type": "application/json",
"Authorization": `Bearer ${apiKey}`
},
body: JSON.stringify({
model: "gpt-4o-mini",
messages: [
        {
         role: "system",
         content: `Provide data from ${dataContnet}.`
         },

         {
          role: "system",
          content: `Provide data from ${conversationHistory}.`
          },
        {
            role: "user", 
            content: question
        }
],
max_tokens: 20,
temperature: 0.9
})
});

if (!apiResponse.ok) {
throw new Error(`Error API: ${apiResponse.status}`);
}

const contentMessage = await apiResponse.json();
const message = contentMessage.choices[0]?.message?.content;
response.innerHTML = message || "No replies.";

let formData = new FormData();
formData.append('question',question);
formData.append('response',message);

await fetch('assistantDB/enrollingAssistant.php', {
  method: 'POST',
  body: formData
}) 

});