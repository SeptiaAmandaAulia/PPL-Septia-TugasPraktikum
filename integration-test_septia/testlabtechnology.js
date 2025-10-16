// Test 1: Memeriksa Kode Status HTTP
pm.test("Status code is 200", function () {
    pm.response.to.have.status(200);
});

// Test 2: Memeriksa Properti Wajib pada Setiap Artikel Teknologi
pm.test("Each technology news article has required fields (title, description, author)", function () {
    const jsonData = pm.response.json();

    // Pastikan properti 'articles' ada
    pm.expect(jsonData).to.have.property('articles');
    pm.expect(jsonData.articles).to.be.an('array');

    jsonData.articles.forEach(article => {
        // Cek Title
        pm.expect(article, 'Article must have a title').to.have.property("title");
        // Cek Description
        pm.expect(article, 'Article must have a description').to.have.property("description");
        // Cek Author
        pm.expect(article, 'Article must have an author').to.have.property("author");
    });
});