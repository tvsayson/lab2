/*Lesson 1 */
alert('Hi, this website is still under development! but hey, welcome to my site! 😁');

/*Lesson 2 */
const age1 = 10;
const age2 = 10;
let aged = age1 + age2;
document.getElementById("age").innerHTML = "<strong> Age: </strong>" + aged;

/* Lesson 7 Arrays */
const games = ["Valorant","League of Legends","Overwatch 2","Lethal Company"]
document.getElementById("game").innerHTML = "These are the games I always play but you can still invite me on other games " + games

/* Lesson 8 Dates */
const dates = new Date();
document.getElementById("date").innerHTML = dates;

/* Lesson 9 */
function today(){
	const currentDate = new Date();

	const dayofWeek = currentDate.getDay();

	const daysofWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]

	if (dayofWeek == 0 || dayofWeek == 6){
		alert("Today is " + daysofWeek[dayofWeek] + ". It's the weekend! 🤭");
	}
	else{
		alert("Today is " + daysofWeek[dayofWeek] + ". It's a weekday sad 😖");
	}
}