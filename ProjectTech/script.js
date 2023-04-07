
function test1(){
    let element = document.getElementById("len").value;
    if(element.length ==3){
        alert("Never Gonna Give You Up");
    };
}

function highPrice(){
    var str = "test";
    return str;
}
function lowPrice(){

}
var Persons;

function personsArray(){
    
    var person1 ={
        id_number: 123456781,
        firstName: "Harry1",
        lastName: "Potter",
        mail: "Harry1@Potter.com",
        Password: "Harry1",

    };
    var person2 ={
        id_number: 123456782,
        firstName: "Harry2",
        lastName: "Potter",
        mail: "Harry2@Potter.com",
        Password: "Harry2",

    };
    var person3 ={
        id_number: 123456783,
        firstName: "Harry3",
        lastName: "Potter",
        mail: "Harry3@Potter.com",
        Password: "Harry3",

    };
    var person4 ={
        id_number: 123456784,
        firstName: "Harry4",
        lastName: "Potter",
        mail: "Harry4@Potter.com",
        Password: "Harry4",

    };
    var person5 ={
        id_number: 123456785,
        firstName: "Harry5",
        lastName: "Potter",
        mail: "Harry5@Potter.com",
        Password: "Harry5",

    };
    var person6 ={
        id_number: 123456786,
        firstName: "Harry6",
        lastName: "Potter",
        mail: "Harry6@Potter.com",
        Password: "Harry6",

    };
    var person7 ={
        id_number: 123456787,
        firstName: "Harry7",
        lastName: "Potter",
        mail: "Harry7@Potter.com",
        Password: "Harry7",

    };
    var person8 ={
        id_number: 123456788,
        firstName: "Harry8",
        lastName: "Potter",
        mail: "Harry8@Potter.com",
        Password: "Harry8",

    };
    var person9 ={
        id_number: 123456789,
        firstName: "Harry9",
        lastName: "Potter",
        mail: "Harry9@Potter.com",
        Password: "Harry9",

    };
    var person10 ={
        id_number: 123456780,
        firstName: "Harry10",
        lastName: "Potter",
        mail: "Harry10@Potter.com",
        Password: "Harry10",

    };
    
    Persons = [person1,person2,person3,person4,person5,person6,person7,
                    person8,person9,person10];
    document.getElementById(i).innerHTML=
        Persons[i].firstName+" "+ Persons[i].lastName+" his mail: "+ Persons[i].mail;
                    
}
function login(){
    let user = document.getElementById("userName").value;
    let password = document.getElementById("password").value;
    let found = 0;
    for(let i = 0;i<Persons.length;i++){
        if(user==Persons[i].firstName && password == Persons[i].Password){
            alert("Log in was Succsessfuly!")
            found = 1;
            break;
        }
        else if(user==Persons[i].firstName && password != Persons[i].Password){
            alert("Invalid Password!");
            var pass = document.getElementById("password").style.color='red';
            document.getElementById("password").style.innerHTML=pass;
            break;
        }
        
        else if(user!=Persons[i].firstName && password == Persons[i].Password){
            alert("Invalid User name!");
            var str = document.getElementById("userName").style.color='red';
            document.getElementById("userName").style.innerHTML=str;
            break;
        }
        else if(user!=Persons[i].firstName && password != Persons[i].Password && 
                i == Persons.length-1){
            alert("Invalid Input!");
            var str = document.getElementById("userName").style.color='red';
            document.getElementById("userName").style.innerHTML=str;
            var pass = document.getElementById("password").style.color='red';
            document.getElementById("password").style.innerHTML=pass;
            break;
        }
    }
}
