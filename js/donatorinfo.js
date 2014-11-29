$(function() {
	new DonatorList;
});

DonatorList = (function() {
	function DonatorList() {
		this.getDonator();
	}

	DonatorList.prototype.listDonator = function(data) {
		var list = $('#donators');
		for (var i = 0; i < data.length; i++) 
			list.append(this.newDonator(data[i]));
	}
	
	DonatorList.prototype.getDonator = function() {
		var that = this;
		var settings = {
			type: 'GET',
			url: 'class/donatorinfo.php',
			dataType: 'json',
			success: function(data) {
				if (data) that.listDonator(data.donate);
			},
			error: function(data, status) {
				console.log(status);
			}
		};
		$.ajax(settings);
	}
	
	DonatorList.prototype.newDonator = function(data) {
		var item = $('<li/>');
		item.addClass('donator-item').append(
			$('<span/>').addClass('donator-name').text(data.name),
			$('<span/>').addClass('donator-amount').text(data.amount)
		);
		return item[0];
	}

	return DonatorList;
})();