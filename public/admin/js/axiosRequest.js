var token = $("meta[name='csrf-token']").attr("content");

const configAdm = {
    headers: {
        "Content-Type" 	: "application/json; charset=utf-8",
        "Cache-Control"	: "no-cache",
        "Pragma"       	: "no-cache",
        "X-CSRF-TOKEN"	: token
    }
};

function getProductDetail(id) {
    return axios.get('/admin/api/product/' + id, configAdm);
}
