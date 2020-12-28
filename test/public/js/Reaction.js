class Reaction {
	constructor() {
		this.listenToEvents();
	}

	listenToEvents() {
		console.log('Listening to events...');
		this.likeArticle();
	}

	likeArticle() {
		console.log("An user like an articles.");

		$('.like-article').click(function() {
			var articleId = $(this).data("id");
			var url = $(this).data("href");
			// $.ajax({
			// 	url: url,
			// 	type: "POST",
			// 	success: function(response) {
			// 		console.log(response);
			// 	},
			// 	error: function(error) {
			// 		console.log(error);
			// 	}
			// });
			$.ajax({
				headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
			  	type: "POST",
				url: url,
				// data: data,
				success: function(response) {
					console.log(response);
				},
				// dataType: dataType
			});
		});
	}
}

new Reaction();