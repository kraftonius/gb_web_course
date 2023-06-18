// 1️⃣‼️ Создайте всплывающее окно, которое спрашивает 
// (у вводящего пользователя на экране) ввод вашего любимого фильма и если ввод неверен, 
// то программа отправляет запрос alert “Попробуйте ещё раз”. В функции должны быть минимум 2 условия. 
// Не просто использовуйте prompt или alert или confirm, а создайте свою функцию, 
// пример: "function Вашеимяфункциитут()"‼️

function isMyFavFilm() {
    let text = prompt("Введите название моего любимого фильма");
        if (text.toLowerCase() == "матрица" //условие №1 !!!
        || text.toLowerCase() == "matrix" //условие №2 !!!
        ){
            window.alert("Угадали, Матрица (Matrix)");
        } else {
            window.alert(`Вы ввели ${text}, Попробуйте ещё раз`);
        }
}

// 2️⃣‼️Создайте массив с произвольными элементами. Отсортируйте его в обратном порядке и выведите 
// в документе или консоли все данные из него. ‼️

function bubbleDescSort(arr) {
    for (let j = 0; j < arr.length - 1; j++) {
      for (let i = arr.length - 1; i > j; i--) {
        if (arr[i] > arr[i - 1]) {
          let temp = arr[i];
          arr[i] = arr[i - 1];
          arr[i - 1] = temp;
        }
      }
    }
    return arr;
  }

let my_array = ["cat", "parrot", "turtle", "fish", "dog", "zebra"];
my_array = bubbleDescSort(my_array);
console.log(my_array);



