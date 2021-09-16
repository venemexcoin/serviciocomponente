@push('title_base')
    Pactica 1
@endpush

@push('styles')
    <style>
        ul.pagination {
            display: inline-block;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        ul.pagination li {
            display: inline;
        }

        ul.pagination li a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
            border: 1px solid #ddd;
        }

        ul.pagination li a.active {
            background-color: #4CAF50;
            color: white;
            border: 1px solid #4CAF50;
        }

        ul.pagination li a:hover:not(.active) {
            background-color: #ddd;
        }

    </style>
@endpush

<div class="container">
    <div class="tible">
        <h1>Hola mundo</h1>
        <h1>Código JavaScript Ejemplo 20</h1>
        <div class="content">
            <pre class="prettyprint linenums:1"><code class="language-javascript">
                class Book {
                    constructor(title, author, year, gender) {
                        this.title = title
                        this.author = author
                        this.year = year
                        this.gender = gender
                    }

                    getAuthor() {
                        return this.author
                    }

                    getGender() {
                        return this.gender
                    }

                    bookInfo() {
                        return `${this.title} es un libro de ${this.gender} escrito por ${this.author} en el año ${this.year}`
                    }
                }

                let books = []


                while (books.length < 3) {
                    let title = prompt(`Introduce el título del libro`)
                    let author = prompt(`Introduce el autor del libro`)
                    let year = prompt(`Introduce el año del libro`)
                    let gender = prompt(`Introduce el genero del libro`).toLowerCase()

                    if (title != '' && author != '' && !isNaN(year) && year.length == 4 && (gender == 'aventura' || gender == 'terror' || gender == 'fantasía')) {

                        books.push(new Book(title, author, year, gender))

                    }

                }

                const showAllBooks = () => {
                    console.log(books);
                }

                //showAllBooks();

                const showAuthors = () => {
                    let authors = []
                    for (const book of books) {
                        authors.push(book.getAuthor());
                    }
                    console.log(authors.sort())
                }

                const showGender = () => {
                    const gender = prompt('Introduce el género a buscar')
                    for (const book of books) {
                        if (book.getGender() == gender) {
                            console.log(book.bookInfo())
                        }
                    }
                }

                //showAuthors();
                showGender();

    </code></pre>
        </div>

    </div>

    <div class="container">
        <div class="tible">
            <h1>Hola mundo</h1>
            <h1>Código JavaScript Ejemplo 21</h1>
            <div class="content">
                <pre class="prettyprint linenums:1"><code class="language-javascript">
                     let word = 'Hola Mundo'

                     console.log(Array.from(word));

                     console.log(word.split(' '));

                     const letters = ['b', 'c', 'z', 'a']
                     const numbers = ['1', '8', '100', '300', '3']

                     console.log(letters.sort());
                     console.log(numbers.sort((a, b) => a - b));
                     console.log(numbers.sort((a, b) => b - a));

                     const numbers = [12, 25, 47, 84, 98]

                     numbers.forEach((number) => console.log(number));
                     numbers.forEach((number, index) =>
                         console.log(`${number} está en la posicion ${index}`));

                     const words = ['HTML', 'CSS', 'JavaScript', 'PHP']

                     console.log(words.some(word => word.length > 2));
                     console.log(words.some(word => word.length > 10));

                     console.log(words.every(word => word.length > 10));

                     const numbers = [12, 25, 47, 84, 98]

                     const numbers2 = numbers.map(number => number * 2)

                     console.log(numbers2);

                     const numbers = [12, 25, 47, 84, 98]

                     const numbers2 = numbers.filter(number => number > 40);

                     console.log(numbers2);

                     const numbers = [1, 2, 3, 4, 5]

                     console.log(numbers.reduce((a, b) => a + b));

                    const users = [{
                            name: 'user 1',
                            online: true
                        },
                        {
                            name: 'user 2',
                            online: false
                        },
                        {
                            name: 'user 3',
                            online: false
                        },
                        {
                            name: 'user 4',
                            online: true
                        },
                        {
                            name: 'user 5',
                            online: false
                        },
                        {
                            name: 'user 6',
                            online: true
                        },
                        {
                            name: 'user 7',
                            online: true
                        },
                        {
                            name: 'user 8',
                            online: false
                        }
                    ]

                    const usersOnline = users.reduce((cont, user) => {
                        if (user.online) cont++
                        return cont
                    }, 0);

                    console.log(`Hay ${usersOnline} usuarios conectados`);
        </code></pre>
            </div>

        </div>

        <div class="container">
            <div class="tible">
                <h1>Hola mundo</h1>
                <h1>Código JavaScript Ejemplo 22</h1>
                <div class="content">
                    <pre class="prettyprint linenums:1"><code class="language-javascript">
                         const numbers = [-12, 2, 3, 23, 43, 2, 3]

                         console.log(...numbers);

                        Enviar elementos en un array a una funcion

                         const addNumbers = (a, b, c) => {
                             console.log(a + b + c);
                         }

                         let numbersToAdd = [1, 2, 3]

                         addNumbers(...numbersToAdd);

                         Añadir un array a otro array


                         let user = ['Javier', 'David', 'Rosa', 'Juan', 'Daniela']

                         let newUsers = ['Marta', 'Jaime', 'Laura', 'Eduado']

                                                 user.push(...newUsers);
                                                 user.unshift(...newUsers);
                         user.splice(2, 0, ...newUsers);

                         console.log(user);

                         Copiar un array

                         let arr1 = [1, 2, 3, 4]
                         let arr2 = [...arr1]

                         console.log(arr2);

                         Concatenar arrays

                         let arr1 = [1, 2, 3, 4]
                         let arr2 = [6, 7, 8]

                                                 let arrConcat = arr1.concat(arr2);
                         let arrConcat = [...arr1, ...arr2];


                         console.log(arrConcat);

                         Enviar un número indefinido de argumento a una función
                        (parametros REST)

                         const restParms = (...numbers) => {
                             console.log(numbers)
                         }

                         restParms();

                         libreria math

                        const numbers = [-12, 2, 3, 23, 43, 2, 3]

                        console.log(Math.max(...numbers))
                        console.log(Math.min(...numbers))



                        //Eliminar elementos duplucados

                        console.log([...new Set(numbers)]);
            </code></pre>
                </div>

            </div>
            <ul class="pagination">
                <li><a href="{{ route('javascript.ejemplo4') }}">...</a></li>
                <li><a href="{{ route('javascript.ejemplo5') }}">5</a></li>
                <li><a href="{{ route('javascript.ejemplo6') }}">6</a></li>
                <li><a class="active" href="#">7</a></li>
                <li><a href="{{ route('javascript.ejemplo8') }}">8</a></li>
                <li><a href="{{ route('javascript.ejemplo9') }}">...</a></li>
                {{-- <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">»</a></li> --}}
            </ul>
        </div>
        @push('scripts')
            <script>

            </script>
        @endpush
