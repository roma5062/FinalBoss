function LoadText() {
    fetch('post.php')
        .then((response) => { return response.json() })

        .then(data => {
            const container = document.getElementById('list');

            container.innerHTML = '';

            data.forEach(Content => {

                const DivCont = document.createElement('div');

                DivCont.innerHTML = `
    <p>${Content.title}</p>
    <p>${Content.comment}</p>
    <hr>
    `;

                container.appendChild(DivCont);
            });;
        });

}

LoadText();