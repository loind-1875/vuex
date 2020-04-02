class Until {
    static formatNumber(price)
    {
        if (price) {
            return parseInt(price).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
        }

        return '-';
    }
}

export {Until}
