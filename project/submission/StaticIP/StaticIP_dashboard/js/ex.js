fetch('./data/data.json') // fetch is a promise
    .then(response => response.json()) // response.json() is a promise
    .then(data => {
        console.log(data)
    })
    .catch(err => console.log(err));