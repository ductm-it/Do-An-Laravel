$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
});

const viewBillDetail = async billID => {
    let rawData = await $.get(`/api/bill/${billID}`);
    
    let promiseCleanData = rawData.map(async item => {
        let cleanData = await $.get(`/api/product/${item.shoesID}`);
        item.shoesID = cleanData[0].name;
        return item;
    });
    

    let result = await Promise.all(promiseCleanData);

    let html = ``;
    result.forEach(item => {
        // item.shoesID = data[0].name;
        html += `
            <tr>
                <td>
                ${item.id}
                </td>
                <td>
                ${item.shoesID}
                </td>
                <td>
                ${item.amount}
                </td>
                <td>
                ${item.money}
                </td>
            </tr>
            `;
    });

    $("#detail-body").empty();
    $("#detail-body").append(html);
    
};
