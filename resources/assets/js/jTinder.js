var currentUserIndex = 0;
var postReaction = function (to_user_id, reaction) {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    }
  });
  $.ajax({
    type: "POST",
    url: "/api/like",
    data: {
      to_user_id: to_user_id,
      from_user_id: from_user_id,
      reaction: reaction,
    },
    success: function (j_data) {
      console.log("success")
    }
  });
}
$("#tinderslide").jTinder({
  onDislike: function (item) {
    currentUserIndex++;
    checkUserNum();
    var to_user_id = item[0].dataset.user_id
    postReaction(to_user_id, 'dislike')
  },
  onLike: function (item) {
    currentUserIndex++;
    checkUserNum();
    var to_user_id = item[0].dataset.user_id
    postReaction(to_user_id, 'like')
  },
  animationRevertSpeed: 200,
  animationSpeed: 400,
  threshold: 1,
  likeSelector: '.like',
  dislikeSelector: '.dislike'
});
$('.actions .like, .actions .dislike').click(function (e) {
  e.preventDefault();
  $("#tinderslide").jTinder($(this).attr('class'));
});

function checkUserNum() {
  // スワイプするユーザー数とスワイプした回数が同じになればaddClassする
  if (currentUserIndex === usersNum) {
    $(".noUser").addClass("is-active");
    $("#actionBtnArea").addClass("is-none")
    return;
  }
}
