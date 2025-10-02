<!doctype html>

<html lang="en">
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />

    <title>Social-Pique lol.</title>

    <!-- <link rel="stylesheet" type="text/css" href=""> -->

    <style type="text/css">

      @font-face {
        font-family: "dpcali";
        src: url("/assets/dpcali.woff");
      }

      @font-face {
        font-family: "lemonmilk";
        src: url("/assets/LEMONMILK-Regular.woff");
      }

      * {
        margin: 0;
        padding: 0;
        font-size: 1rem;
        box-sizing: border-box;
        font-family: Georgia;
      }

      body {
        /*background-color: rgba(22.2, 62.1, 87.2, 1);*/
        background-color: #FFFFFF;
        font-family: "Georgia", "Helvetica", "Arial", sans-serif;
      }

      h1 {
        font-family: Georgia;

      }

      .shadow {
        text-shadow: 2px 2px 2px #000;
      }

      /*

        /admin

        'Special' directives for Administrative interface.

      */

      .b-adminbtn { border: 5px solid #CCC; }

      /*

        End /admin.

      */

      .ff-serif { font-family: serif; }
      .d-block { display: block; }
      .d-flex { display: flex; }
      .fd-column { flex-direction: column; }
      .fd-row { flex-direction: row; }
      .fw-wrap { flex-wrap: wrap; }
      .jc-space-between { justify-content: space-between; }
      .jc-center { justify-content: center; }
      .jc-space-around { justify-content: space-around; }
      .jc-flex-start { justify-content: flex-start; }
      .jc-flex-end { justify-content: flex-end; }
      .ai-center { align-items: center; }
      .ai-flex-start { align-items: flex-start; }
      .as-flex-start { align-self: flex-start; }
      .as-center { align-self: center; }
      .rg-0    { row-gap: 0; }
      .rg-half { row-gap: 0.5rem; }
      .rg-1    { row-gap: 1.0rem; }
      .rg-1-5  { row-gap: 1.5rem; }
      .rg-2    { row-gap: 2rem; }
      .cg-half { column-gap: 0.5rem; }
      .cg-1 { column-gap: 1.0rem; }
      .cg-1-5 { column-gap: 1.5rem; }
      .fg-1 { flex-grow: 1; }
      .pa-quarter { padding: 0.25rem; }
      .pa-half { padding: 0.5rem; }
      .pa-1 { padding: 1rem; }
      .pa-1-5 { padding: 1.5rem; }
      .pa-2 { padding: 2rem; }
      .pl-2 { padding-left: 2rem; }
      .pl-3 { padding-left: 3rem; }
      .pl-4 { padding-left: 4rem; }
      .pv-half { padding-top: 0.5rem; padding-bottom: 0.5rem; }
      .pv-quarter { padding-top: 0.25rem; padding-bottom: 0.25rem; }
      .pv-1 { padding-top: 1rem; padding-bottom: 1rem; }
      .pv-2 { padding-top: 2rem; padding-bottom: 2rem; }
      .ph-1 { padding-left: 1rem; padding-right: 1rem; }
      .ph-half { padding-left: 0.5rem; padding-right: 0.5rem; }
      .ph-quarter { padding-left: 0.25rem; padding-right: 0.25rem; }
      .pb-1 { padding-bottom: 1rem; }
      .pb-half { padding-bottom: 0.5rem; }
      .pt-half { padding-top: 0.5rem; }
      .pt-1 { padding-top: 1rem; }

      .mb-1 { margin-bottom: 1rem; }
      .ml-1 { margin-left: 1rem; }
      .mv-1 { margin-top: 1rem; margin-bottom: 1rem; }
      .mv-half { margin-top: 0.5rem; margin-bottom: 0.5rem; }

      .ta-left { text-align: left; }
      .ta-center { text-align: center; }
      .ta-right { text-align: right; }

      .td-none { text-decoration: none; }

      .m-auto { margin: auto; }
      .w-18 { width: 18%; }
      .w-20 { width: 20%; }
      .w-25 { width: 25%; }
      .w-30 { width: 30%; }
      .w-30 { width: 30%; }
      .w-30 { width: 30%; }
      .w-33 { width: 33%; }
      .w-34 { width: 34%; }
      .w-35 { width: 35%; }
      .w-30 { width: 30%; }
      .w-30 { width: 30%; }
      .w-30 { width: 30%; }
      .w-39 { width: 39%; }
      .w-40 { width: 40%; }
      .w-41 { width: 41%; }
      .w-42 { width: 42%; }
      .w-43 { width: 43%; }
      .w-44 { width: 44%; }
      .w-45 { width: 45%; }
      .w-46 { width: 46%; }
      .w-47 { width: 47%; }
      .w-48 { width: 48%; }
      .w-49 { width: 49%; }
      .w-50 { width: 50%; }
      .w-60 { width: 60%; }
      .w-65 { width: 65%; }
      .w-70 { width: 70%; }
      .w-75 { width: 75%; }
      .w-80 { width: 80%; }
      .w-90 { width: 90%; }
      .w-95 { width: 95%; }
      .w-100 { width: 100%; }
      .w-auto { width: auto; }

      .h-100 { height: 100%; }

      .lh-1 { line-height: 1rem; }
      .lh-1-1 { line-height: 1.1rem; }
      .lh-1-2 { line-height: 1.2rem; }
      .lh-1-3 { line-height: 1.3rem; }
      .lh-1-4 { line-height: 1.4rem; }
      .lh-1-5 { line-height: 1.5rem; }
      .lh-1-6 { line-height: 1.6rem; }
      .lh-1-7 { line-height: 1.7rem; }
      .lh-1-8 { line-height: 1.8rem; }
      .lh-1-9 { line-height: 1.9rem; }
      .lh-2 { line-height: 2rem; }

      .bgc-red { background-color: red; }
      .bgc-lightred { background-color: #ffcccb; }
      .bgc-green { background-color: green; }
      .bgc-lightgreen { background-color: lightgreen; }
      .bgc-lightblue { background-color: lightblue; }
      .bgc-black { background-color: black; }
      .bgc-yellow { background-color: yellow; }
      .bgc-lightyellow { background-color: lightyellow; }
      .bgc-purple { background-color: purple; }
      .bgc-white { background-color: white; }
      .bgc-snow { background-color: #F2F2F2; }
      .bgc-snow2 { background-color: #F0F0F0; }
      .bgc-333 { background-color: #333; }
      .bgc-ccc { background-color: #CCC; }
      .bgc-cornflowerblue { background-color: #6495ed; }


      .c-white { color: white; }
      .c-yellow { color: yellow; }
      .c-red { color: red; }
      .c-black { color: black; }
      .c-green { color: green; }
      .c-blue { color: blue; }
      .c-333 { color: #333; }
      .c-444 { color: #444; }
      .c-555 { color: #555; }
      .c-666 { color: #666; }
      .c-999 { color: #999; }
      .c-redpink { color: #ff2500; }
      .c-tiredorange { color: #f5a80d; }

      .hidden { display: none; }
      .fw-bold { font-weight: bold; }

      .fs-0-8 { font-size: 0.8rem; }
      .fs-0-9 { font-size: 0.9rem; }
      .fs-1 { font-size: 1rem; }
      .fs-1-1 { font-size: 1.1rem; }
      .fs-1-2 { font-size: 1.2rem; }
      .fs-1-3 { font-size: 1.3rem; }
      .fs-1-4 { font-size: 1.4rem; }
      .fs-1-5 { font-size: 1.5rem; }
      .fs-2 { font-size: 2rem; }
      .fs-2-1 { font-size: 2.1rem; }
      .fs-2-2 { font-size: 2.2rem; }
      .fs-2-3 { font-size: 2.3rem; }
      .fs-2-4 { font-size: 2.4rem; }
      .fs-2-5 { font-size: 2.5rem; }
      .fs-2-7 { font-size: 2.7rem; }


      .fs-3 { font-size: 3rem; }
      .fs-3-1 { font-size: 3.1rem; }
      .fs-3-2 { font-size: 3.2rem; }
      .fs-3-3 { font-size: 3.3rem; }
      .fs-3-5 { font-size: 3.5rem; }
      .fs-4 { font-size: 4rem; }
      .fs-5 { font-size: 5rem; }


      .bt-2pxsolidblack { border-top: 2px solid #000000; }
      .custom-bt { border-top: 1px solid black; border-bottom: 1px solid black; }
      .dhl-2 { border-top: 2px dotted #666; }

      .pl-1 { padding-left: 1rem; }

      .bgc-deep-purple { background-color: #5b055d; }

      .highlight:hover {
        background-color: yellow;
        cursor: pointer;
      }

      .c-pointer { cursor: pointer; }

      .br-0 { border-radius: 0px; }
      .br-1 { border-radius: 1px; }
      .br-2 { border-radius: 2px; }
      .br-3 { border-radius: 3px; }
      .br-4 { border-radius: 4px; }
      .br-5 { border-radius: 5px; }
      .br-10 { border-radius: 10px; }
      .br-15 { border-radius: 15px; }
      .br-20 { border-radius: 20px; }
      .br-25 { border-radius: 25px; }
      .br-30 { border-radius: 30px; }

      .bb-1-ccc { border-bottom: 1px solid #CCC; }

      .mt-half { margin-top: 0.5rem; }
      .mt-1 { margin-top: 1rem; }


      .btn-grad {background-image: linear-gradient(to right, #fe8c00 0%, #f83600  51%, #fe8c00  100%)}
      .btn-grad {
        margin: 10px;
        padding: 15px 45px;
        text-align: center;
        text-transform: uppercase;
        transition: 0.5s;
        background-size: 200% auto;
        color: white;            
        box-shadow: 0 0 20px #eee;
        border-radius: 3px;
        display: block;
        font-size: 2rem;
        font-family: 'lemonmilk';
      }

      .btn-grad:hover {
        background-position: right center; /* change the direction of the change here */
        color: #fff;
        text-decoration: none;
      }
     



      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        /*background-color: white;*/
      }.btn {
        padding: 20px 60px;
        border: none;
        outline: none;
        position: relative;
        z-index: 1;
        border-radius: 5px;
        background: linear-gradient(to right, #00FFA3, #DC1FFF);
        cursor: pointer;
      }.btn::before {
        content: "";
        position: absolute;
        left: 2px;
        right: 2px;
        top: 2px;
        bottom: 2px;
        border-radius: 3px;
        background-color: #444;
        z-index: -1;
        transition: 200ms
      }.btn::after {
        content: attr(data);
        font-size: 2.5rem;
        font-family: 'lemonmilk';
        font-weight: bold;
        background: linear-gradient(to left, #00FFA3, #DC1FFF);
        -webkit-background-clip: text;
        color: transparent;
        transition: 200ms
      }.btn:hover::before {
        opacity: 50%;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
      }.btn:hover::after{
        color: #FFF;
        text-shadow: 2px 2px 2px #000;
      }


      @media (0px <= width <= 1200px) {

        .mq { color: blue; }

      }

      @media (width >= 1200px) {

        .mq { color: mintcream; }

      }

      #output, #output p, #output span, #output p span {
        font-size: 1.25rem;
      }
    </style>

    <script src=""></script>

    <script src="/assets/vue.min.js"></script>
    <script src="/assets/jquery.min.js"></script>
  </head>

  <body class="bgc-black">
    
    <div id="vue-app">

      <div id="screen-1-login" v-bind:class="{'hidden': ui.state_1 != 'screen-1-login'}" class="ta-center" style="width: 600px; margin: auto;">
        <div class="pv-1"></div>
        <img src="/assets/walking-dragon-legend-myth-folklore-svgrepo-com-cropped.svg" width="300" style="" />
        <!-- <img src="/assets/dragon-2-red-1.svg" width="300" style="border: 1px solid yellow;" /> -->
        
        <h1 class="mq xc-white fs-4" style="font-family: 'dpcali';">Social-Pique.com</h1>



        <div style="background-color: #333;">
          <div class="d-flex" style="background-color: #333;">
            <div class="w-50">
              <a href="javascript://" class="fs-2 c-white pv-1 d-block" style="text-decoration: none; background-color: #333;">Register</a>
            </div>

            <div class="w-50" style="background: #CCC; border: 2px solid #333;">
              <a href="javascript://" class="fs-2 c-black pv-1 d-block" style="text-decoration: none;">Login</a>
            </div>
          </div>

          <div class="pv-1"></div>

          <div class="ph-1">
            <p class="ta-left c-white fs-1-5">Your chatroom alias:</p>
            <div style="border: 10px outset #444;">
              <input v-model="client.client_name" type="text" class="w-100 pa-1 fs-1-5" />
            </div>

            <div class="pv-half"></div>

            <p class="ta-left c-white fs-1-5">Your password:</p>
            <div style="border: 10px outset #444;">
              <input v-model="client.client_password" type="text" class="w-100 pa-1 fs-1-5" />
            </div>

            <div class="pv-1"></div>

            <div class="container">
              <button v-on:click="register" class="btn" data="Connect to Server"></button>
            </div>

            <div class="pv-1"></div>
          </div>
        </div>
      </div>

      <div id="screen-2-lobby" v-bind:class="{'hidden': ui.state_1 != 'screen-2-lobby'}" class="bgc-white">
        <div class="bgc-black pa-1 d-flex ai-center cg-1">
          <img src="/assets/walking-dragon-legend-myth-folklore-svgrepo-com-cropped.svg" width="75" style="border: 0px solid yellow;" />
          <h1 class="fs-2 c-white" style="margin-top: 10px; border:0px solid red; font-family: 'dpcali';">Social-Pique</h1>
        </div>
        <header class="" style="padding: 1rem;">
          <h1 class="fs-1-5" style="font-family: Arial;">Chatroom Lobby</h1>
          <div id="status"></div>
        </header>

        <div class="" style="margin-left: 1rem; margin-right: 1rem; border: 5px solid black;">
          <nav class="" style="padding: 0.5rem; xpadding-top: 0; ">
            <div id="connecting" class="pa-half">
              <input type='text' id="server" value="" placeholder="Type here..." class="fs-1-5 pa-half" style="border: 2px inset #555;" />
              <button type="button" onclick="toggle_connection()">connection</button>
            </div>

            <div id="connected" class="pa-half">
              <span class="fs-1-5 fw-bold">{{ client.client_name }}:</span> 
              <input v-on:keyup.enter="proxy_send_text" type='text' id="message" value="" class="fs-1-5 pa-half" placeholder="Type here..." style="border: 2px inset #555;"></input>
              <button type="button" onclick="sendTxt();" class="pa-half fs-1-5">Send Message</button>
            </div>
          </nav>
        </div>

        <main id="content" class="ph-1 d-flex">
          <!-- <button id="clear" onclick="clearScreen()" >Clear text</button> -->
          <div id="output" class="w-75 pa-half d-flex fd-column rg-half" style="border: 5px solid black;"></div>
          <div id="party" class="w-25 pa-half d-flex fd-column rg-half" style="border: 5px solid black;">
            <p v-for="client in party" class="fs-1-2">
              {{ client }}
            </p>
          </div>
        </main>

      </div>

    </div>
  <script>


    var websocket;
    var server;
    var message;
    var connecting;
    var connected;
    var content;
    var output;


    function connect()
    {
       server = document.getElementById("server");
       message = document.getElementById("message");
       connecting = document.getElementById("connecting");
       connected = document.getElementById("connected");
       content = document.getElementById("content");
       output = document.getElementById("output");


      server.value = "wss://" + window.location.host + "/websocket";
      connected.style.display = "none";
      content.style.display = "none";

      wsHost = server.value;
      websocket = new WebSocket(wsHost);
      showScreen('<b>Connecting to: ' +  wsHost + '</b>');
      websocket.onopen = function(evt) { onOpen(evt) };
      websocket.onclose = function(evt) { onClose(evt) };
      websocket.onmessage = function(evt) { onMessage(evt) };
      websocket.onerror = function(evt) { onError(evt) };

      window.setInterval(function() {
        websocket.send("/keep-alive");
      }, 10000);
    };

    function disconnect() {
      websocket.close();
    };

    function toggle_connection(){
      if (websocket && websocket.readyState == websocket.OPEN) {
        disconnect();
      } else {
        connect();
      };
    };

    function sendTxt() {
      if (websocket.readyState == websocket.OPEN) {
        var msg = message.value;
        websocket.send(msg);
        message.value = "";
        // showScreen('sending: ' + msg);
      } else {
        showScreen('websocket is not connected');
      };
    };

    function onOpen(evt) {
      showScreen('<span style="color: green;">Connected to websocket server.</span>');
      connecting.style.display = "none";
      connected.style.display = "";
      content.style.display = "";
      // identify ourself to the websocket server
      websocket.send("/identify " + vue_data.client.client_socket_token);
      showScreen('<span style="color: green;">Identifying you to the server...</span>');
    };

    function onClose(evt) {
      showScreen('<span style="color: red;">DISCONNECTED</span>');
    };

    function onMessage(evt) {
      showScreen('<span style="color: black;">' + evt.data + '</span>');
    };

    function onError(evt) {
      showScreen('<span style="color: red;">ERROR: ' + evt.data + '</span>');
    };

    function showScreen(html) {
      var el = document.createElement("p");
      el.innerHTML = html;
      output.insertBefore(el, output.firstChild);
    };

    function clearScreen() {
      output.innerHTML = "";
    };

    var mimey = "application/x-www-form-urlencoded; charset=UTF-8";

    var vue_data = {
      client: {
        client_seq_id: "",
        client_name: "",
        client_password: "",
        client_socket_token: ""
      },

      party: [],

      ui: {
        state_1: "screen-1-login"
      }
    };

    var vue_app = new Vue({
      el: "#vue-app",
      data: vue_data,
      mounted: function() {
        window.setInterval(function() {
          $.ajax({
            url: "https://alpha.social-pique.com/api/chatroom-party",
            method: "get",
            dataType: "json",
            timeout: 5000,
            success: function(response) {
              Vue.set(vue_data, 'party', response);
            },
            error: function(a, b) {
              console.log("XHR error", a, b);
            }
          });
        }, 1000);
      },
      methods: {
        proxy_send_text: function() {
          sendTxt();
        },

        register: function() {
          if(vue_data.client.client_name.length < 1) {
            return;
          }

          if(vue_data.client.client_password.length < 4) {
            return;
          }

          var xhr_data = {
            client_name: String(vue_data.client.client_name),
            client_password: String(vue_data.client.client_password)
          };

          $.ajax({
            url: "https://alpha.social-pique.com/api/connect-to-server",
            method: "post",
            data: xhr_data,
            contentType: mimey,
            dataType: "json",
            timeout: 5000,
            success: function(response) {
              console.log("XHR Success", response);
              vue_data.ui.state_1 = "screen-2-lobby";
              vue_data.client.client_socket_token = response.client_socket_token;
              
              connect();
            },
            error: function(a, b) {
              console.log("XHR error", a, b);
            }
          });

          // Step-1: Talk to server via AJAX. Ask for a chatroom token.
          // Step-2: If given a chatroom token, connect to websocket address, send chatroom token back to server via websocket.
        }
      }
    });

  </script>
  </body>
</html>
