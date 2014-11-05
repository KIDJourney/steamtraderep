$(function() {
    view = new View;
    view.listItem();
});

View = (function() {
    function View() {
        this.target = $('#info');
    }

    View.prototype.listItem = function() {
        if (config.status == 0)
            this.showMassage("没有找到相关结果=w=（但不代表此人不是骗子）");
        else {
            this.showMassage("<p>此人可能是骗子。</p><p>请勿与他交易！。</p><p>请将相关信息反馈给吧务！</p>");
            for (var i = 0; i < config.result.length; i++) {
                var item = new Item(config.result[i]);
                this.target.append(item.item);
            }
        }
    }

    View.prototype.showMassage = function(t) {
        var box = $('#massage-bar');
        box.append($(t));
        box.fadeIn(400, function() {
            setTimeout(function() {
                box.fadeOut(400);
            }, 800);
        });
    }

    return View;
})();

Item = (function() {
    function Item(data) {
        this.item = $('<li/>');
        this.data = data;
        this.render();
    }

    Item.prototype.render = function() {
        this.item.addClass('search-item').append(
            $('<span/>').addClass('tiebaid').text(this.data.tiebaid),
            $('<span/>').addClass('steamid').text(this.data.steamid),
            $('<span/>').addClass('idwei64').text(this.data.idwei64),
            $('<span/>').addClass('taobaoid').text(this.data.taobaoid),
            $('<span/>').addClass('zhifubaomail').text(this.data.zhifubaomail),
            $('<span/>').addClass('zhifubaoid').text(this.data.zhifubaoid),
            $('<span/>').addClass('reason').text(this.data.reason)
        );
    }

    return Item;
})();