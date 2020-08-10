let speech;
let speechRec;
let microphone = false;
let turnOn = false;
var getMessageText, message_side, sendMessage;
message_side = 'right';

function setup() {
  noCanvas();
  let lang = 'es-ES';
  let continuous = true;
  let button = select("#send_message");
  let user_input = select("#message_input");
  //let micro = select("#micro");
  //Se crea objeto de p5.Speech.
  speech = new p5.Speech();
  //Se crea objeto de p5.SpeechRec.
  speechRec = new p5.SpeechRec(lang);
  //Creo un bot con la librería RiveScript.
  let bot = new RiveScript();

  //Cargo la locación del "Cerebro" del bot.
  bot.loadFile("brain/brain.rive").then(brainReady).catch(brainError);
  //Se le indica la funcion que deberá realizar al cargar el objeto.
  speech.onLoad = voiceReady;
  //Se indica a la función que ira cuando se obtengan datos.
  speechRec.onResult = EntradaDatosM;
  //Se indica que siga escuchando siempre.
  speechRec.continuous = continuous;
  //Se inicia la toma de sonido.
  button.mousePressed(EntradaDatos);
  //micro.mousePressed(microphoneChange);
  speechRec.onEnd = speechEnd;
  //
  function speechEnd(){
    turnOn = false;
  }
  function sendMessage(text) {
            var $messages, message;
            if (text.trim() === '') {
                return;
            }
            $('.message_input').val('');
            $messages = $('.messages');
            message_side = message_side === 'left' ? 'right' : 'left';
            message = new Message({
                text: text,
                message_side: message_side
            });
            message.draw();
            return $messages.animate({ scrollTop: $messages.prop('scrollHeight') }, 300);
        }

  function Message(arg) {
        this.text = arg.text, this.message_side = arg.message_side;
        this.draw = function (_this) {
            return function () {
                var $message;
                $message = $($('.message_template').clone().html());
                $message.addClass(_this.message_side).find('.text').html(_this.text);
                $('.messages').append($message);
                return setTimeout(function () {
                    return $message.addClass('appeared');
                }, 0);
            };
        }(this);
        return this;
    }

  function microphoneChange(){
    microphone = !microphone;
    if(!turnOn){
      speechRec.start();
    }

  }
  
  //Funcón que indica que el cerebro del bot se cargo correctamente.
  function brainReady() {
    //Indico que el bot esta listo.
    console.log("Chatbot Ready");
    //Ordena las respuestas en la memoria para una mejor eficiencia (Es Obligatorio hacerlo).
    bot.sortReplies();
    //Creo un número al azar entre 1 y 100.
    let randomNum = floor(random(100)) + 1;
    //Le mando el número al cerebro del Chatbot.
    bot.setVariable("num" , randomNum);
  }

  //Funcón que indica que el cerebro del bot tuvo problema al cargarse.
  function brainError() {
    console.log("Error loading Chatbot's brain");
  }
  //Acceso a los componentes de la interfaz gráfica.
  let human_output = select('#human_output');
  let bot_output = select('#bot_output');


  function EntradaDatosM(){
    //Evalua si se logro reconocer algo o no.

    if(speechRec.resultValue){
      //Guardo lo que se reconocio en una variable.
      let entrada = speechRec.resultString;
      //Muestra lo que se reconocio en la ventana.
      human_output.html(entrada);
      //Llamo al bot.
      bot.reply("local-user", entrada).then(function(reply) {
        bot_output.html(reply);
        speech.speak(reply);
      });
    }
  }
  function EntradaDatos(){
      //Guardo lo que se reconocio en una variable.
      let entrada = user_input.value();
      //Muestra lo que se reconocio en la ventana.
      sendMessage(entrada);
      //Llamo al bot.
      bot.reply("local-user", entrada).then(function(reply) {
        sendMessage(reply);
      });
  }

    
  function voiceReady(){
    //Aqui cambia el idioma del speech.
    //speech.setVoice("Google 日本語");
  }
}
