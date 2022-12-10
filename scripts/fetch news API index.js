let DATA = {};
const form = document.querySelector('form');
const newsContainer = document.querySelector('#news-container');

async function getData() {
    const fetchData = await fetch(
        'https://api-berita-indonesia.vercel.app/tribun/kesehatan/'
    );
    const response = await fetchData.json();

    let count = 0;

    for (const article of response.data) {
        if (count === 4) {
            break;
        }

        newsContainer.innerHTML += templateNews(article);
        count++;
    }

    DATA = response;
}

function templateNews(datas) {
    return `
    <div class="col-12 col-md-6 col-lg-3 mt-4" id="news-item">
        <div class="card">
            <img src="${datas.posts.thumbnail}" alt="">
            <a href="${datas.posts.link}" class="mt-5">
                <h6>${datas.posts.title}</h6>
            </a>
            <p class="article-categories">${datas.posts.description}</p>
            <p class="article-time">${datas.posts.pubDate}</p>
        </div>
    </div>
    `;
}

getData();