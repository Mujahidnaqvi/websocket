import './bootstrap';


const message = document.getElementById('messages');
const form = document.getElementById('message-form');


    form.addEventListener('submit', function(e) {
        e.preventDefault();

        let is_errors = false;        

        if (message.value == '') {
            alert('Please enter the message');
            is_errors = true;
        }

        if (is_errors) {
            return;
        }

        const options = {
            method: 'post',
            url: '/send-message',
            data: {
                message: message.value,
            },
            transformResponse: [(data) => {
                return data;
            }]
        }        
        
        document.getElementById('status').innerHTML = "Message Sent :";
        
        axios(options).catch(error => {
            console.log(error.response)
        });
    });
    

    Echo.channel('chat-channel').listen('Message', (e) => {               
        document.getElementById('message').innerHTML = e.message;
        document.getElementById('messages').value = "";       

    });