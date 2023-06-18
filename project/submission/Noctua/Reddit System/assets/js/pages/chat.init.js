/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: chat app init Js File
*/

(function () {

    //User current Id
    var currentChatId = "users-chat";
    var currentSelectedChat = "users";
    var url = "assets/json/";
    var usersList = "";
    var userChatId = 1;
    var dummyUserImage = "assets/images/users/user-dummy-img.jpg";
    var dummyMultiUserImage = "assets/images/users/multi-user.jpg";

    //user list by json
    var getJSON = function (jsonurl, callback) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", url + jsonurl, true);
        xhr.responseType = "json";
        xhr.onload = function () {
            var status = xhr.status;
            if (status === 200) {
                callback(null, xhr.response);   
            } else {
                callback(status, xhr.response);
            }
        };
        xhr.send();
    };

    // get User list
    getJSON("chat-users-list.json", function (err, data) {
        if (err !== null) {
            console.log("Something went wrong: " + err);
        } else {
            // set users message list
            var users = data[0].users;
            users.forEach(function (userData, index) {
                var isUserProfile = userData.profile ? '<img src="' + userData.profile + '" class="rounded-circle img-fluid userprofile" alt=""><span class="user-status"></span>'
                    : '<div class="avatar-title rounded-circle bg-primary bg-soft text-primary">' + userData.nickname + '</div><span class="user-status"></span>';

                var isMessageCount = userData.messagecount ? '<div class="ms-2"><span class="badge badge-soft-dark rounded p-1">' +
                    userData.messagecount +
                    "</span></div>"
                    : "";

                var messageCount = userData.messagecount ? '<a href="javascript: void(0);" class="unread-msg-user">' : '<a href="javascript: void(0);">'
                var activeClass = userData.id === 1 ? "active" : "";
                document.getElementById("userList").innerHTML +=
                    '<li id="contact-id-' + userData.id + '" data-name="direct-message" class="' + activeClass + '">\
                '+ messageCount + ' \
                <div class="d-flex">\
                    <div class="flex-shrink-0 align-self-center me-3 ' + userData.status + '">\
                        <i class="mdi mdi-circle font-size-10"></i>\
                    </div>\
                    <div class="flex-shrink-0 align-self-center me-3">\
                        <div class="avatar-xs">\
                        ' + isUserProfile + '\
                        </div>\
                    </div>\
                    <div class="flex-grow-1 overflow-hidden">\
                        <h5 class="text-truncate username font-size-14 mb-1">' + userData.name + '</h5>\
                        <p class="text-truncate mb-0">' + userData.recentMessage + '</p>\
                    </div>\
                    <div class="flex-shrink-0 align-self-center ms-2">\
                    <div class="font-size-11">' + userData.time + '</div>\
                    ' + isMessageCount + '\
                    </div>\
                </div>\
            </a>\
        </li>';
            });


            // set channels list
            var channelsData = data[0].channels;
            channelsData.forEach(function (isChannel, index) {
                var isMessage = isChannel.messagecount
                    ? '<div class="flex-shrink-0 ms-2"><span class="badge badge-soft-dark rounded p-1">' +
                    isChannel.messagecount +
                    "</span></div>"
                    : "";
                var isMessageCount = isChannel.messagecount ? '<div class="ms-auto"><span class="badge badge-soft-dark rounded p-1">' +
                    isChannel.messagecount +
                    "</span></div>"
                    : "";
                var messageCount = isChannel.messagecount ? '<a href="javascript: void(0);" class="unread-msg-user">' : '<a href="javascript: void(0);">'
                document.getElementById("channelList").innerHTML +=
                    '<li id="contact-id-' + isChannel.id + '" data-name="channel">\
            '+ messageCount + ' \
                <div class="d-flex align-items-center">\
                    <div class="flex-shrink-0 me-3">\
                        <div class="avatar-xs">\
                            <div class="avatar-title rounded-circle bg-primary bg-soft text-primary">#</div>\
                        </div>\
                    </div>\
                    <div class="flex-grow-1 overflow-hidden">\
                        <h5 class="font-size-14 text-truncate mb-0">' + isChannel.name + "</h5>\
                    </div>\
                    <div>" + isMessage + "</div>\
                    </div>\
            </a>\
        </li>";
            });
        }

        toggleSelected();
        chatSwap();
    });

    // get contacts list
    getJSON("chat-contacts-list.json", function (err, data) {
        if (err !== null) {
            console.log("Something went wrong: " + err);
        } else {
            usersList = data;
            data.sort(function (a, b) {
                return a.name.localeCompare(b.name);
            });
            // set favourite users list
            var msgHTML = "";
            var userNameCharAt = "";

            usersList.forEach(function (user, index) {
                var profile = user.profile
                    ? '<img src="' +
                    user.profile +
                    '" class="img-fluid rounded-circle" alt="">'
                    : '<span class="avatar-title rounded-circle bg-primary">' + user.nickname + '</span>';

                msgHTML =
                    '<li>\
              <div class="d-flex align-items-center">\
                  <div class="flex-shrink-0 me-2">\
                      <div class="avatar-xs">\
                          ' +
                    profile +
                    '\
                      </div>\
                  </div>\
                  <div class="flex-grow-1">\
                  <p class="text-truncate contactlist-name mb-0">' +
                    user.name +
                    '</p>\
                  </div>\
                  <div class="flex-shrink-0">\
                      <div class="dropdown">\
                          <a href="#" class="text-muted font-size-18 px-2 d-block" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\
                          <i class="bx bx-dots-vertical-rounded"></i>\
                          </a>\
                          <div class="dropdown-menu dropdown-menu-end">\
                              <a class="dropdown-item" href="#"><i class="bx bx-pencil text-muted me-2"></i>Edit</a>\
                              <a class="dropdown-item" href="#"><i class="bx bx-block text-muted me-2"></i>Block</a>\
                              <a class="dropdown-item" href="#"><i class="bx bx-trash text-muted me-2"></i>Remove</a>\
                          </div>\
                      </div>\
                  </div>\
              </div>\
          </li>';
                var isSortContact =
                    '<div class="mt-3" >\
              <div class="contact-list-title">' +
                    user.name.charAt(0).toUpperCase() +
                    '\
                </div>\
          <ul id="contact-sort-' +
                    user.name.charAt(0) +
                    '" class="list-unstyled contact-list" >';

                if (userNameCharAt != user.name.charAt(0)) {
                    document.getElementsByClassName("sort-contact")[0].innerHTML +=
                        isSortContact;
                }
                document.getElementById(
                    "contact-sort-" + user.name.charAt(0)
                ).innerHTML =
                    document.getElementById("contact-sort-" + user.name.charAt(0))
                        .innerHTML + msgHTML;
                userNameCharAt = user.name.charAt(0);
                +"</ul>" + "</div>";
            });
        }
        contactList();
        toggleSelected();
    });

    // getNextMsgCounts
    function getNextMsgCounts(chatsData, i, from_id) {
        var counts = 0;
        while (chatsData[i]) {
            if (chatsData[i + 1] && chatsData[i + 1]["from_id"] == from_id) {
                counts++;
                i++;
            } else {
                break;
            }
        }
        return counts;
    }

    //getNextMsgs
    function getNextMsgs(chatsData, i, from_id, isContinue, user) {
        var msgs = 0;
        while (chatsData[i]) {
            if (chatsData[i + 1] && chatsData[i + 1]["from_id"] == from_id) {

                msgs = getMsg(chatsData[i + 1].id, chatsData[i + 1].msg, chatsData[i + 1].has_images, chatsData[i + 1].has_files, chatsData[i + 1].has_dropDown, chatsData[i + 1].datetime, user);
                i++;
            } else {
                break;
            }
        }
        return msgs;
    }

    // getMeg
    function getMsg(id, msg, has_images, has_files, has_dropDown, datetime, user) {

        var msgHTML = '<div class="ctext-wrap">';
        if (msg != null) {
            msgHTML += '<div class="ctext-wrap-content" id=' + id + '>\
            <div class="conversation-name">'+ user.name + '</div>\
            <p class="ctext-content">' + msg + '</p>\
            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> ' + datetime + '</p>\
            </div>';
        } else if (has_images && has_images.length > 0) {
            msgHTML += '<div class="ctext-wrap-content overflow-visible">\
            <div class="conversation-name">'+ user.name + '</div>\
            <div class="message-img mb-0">';
            for (i = 0; i < has_images.length; i++) {
                msgHTML +=
                    '<div class="message-img-list">\
                <div>\
                    <a class="popup-img d-inline-block" href="' + has_images[i] + '">\
                        <img src="' + has_images[i] + '" alt="" class="rounded border">\
                    </a>\
                </div>\
                <div class="message-img-link">\
                <ul class="list-inline mb-0">\
                    <li class="list-inline-item dropdown">\
                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\
                            <i class="bx bx-dots-horizontal-rounded"></i>\
                        </a>\
                        <div class="dropdown-menu">\
                            <a class="dropdown-item" href="' + has_images[i] + '" download=""><i class="ri-download-2-line me-2 text-muted align-bottom"></i>Download</a>\
                            <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>\
                            <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>\
                            <a class="dropdown-item delete-image" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>\
                        </div>\
                    </li>\
                </ul>\
                </div>\
            </div>';
            }
            msgHTML += '</div><p class="chat-time mt-1 mb-0"><i class="bx bx-time-five align-middle me-1"></i> ' + datetime + '</p></div>';
        } else if (has_files.length > 0) {
            msgHTML +=
                '<div class="ctext-wrap-content">\
            <div class="p-3 border-primary border rounded-3">\
            <div class="d-flex align-items-center attached-file">\
                <div class="flex-shrink-0 avatar-sm me-3 ms-0 attached-file-avatar">\
                    <div class="avatar-title bg-soft-primary text-primary rounded-circle font-size-20">\
                        <i class="ri-attachment-2"></i>\
                    </div>\
                </div>\
                <div class="flex-grow-1 overflow-hidden">\
                    <div class="text-start">\
                        <h5 class="font-size-14 mb-1">design-phase-1-approved.pdf</h5>\
                        <p class="text-muted text-truncate font-size-13 mb-0">12.5 MB</p>\
                    </div>\
                </div>\
                <div class="flex-shrink-0 ms-4">\
                    <div class="d-flex gap-2 font-size-20 d-flex align-items-start">\
                        <div>\
                            <a href="#" class="text-muted">\
                                <i class="bx bxs-download"></i>\
                            </a>\
                        </div>\
                    </div>\
                </div>\
            </div>\
            </div>\
        </div>';
        }
        if (has_dropDown === true) {
            msgHTML +=
                '<div class="dropdown align-self-start message-box-drop">\
                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\
                    <i class="bx bx-dots-vertical-rounded"></i>\
                </a>\
                <div class="dropdown-menu">\
                    <a class="dropdown-item" href="#">Forward</a>\
                    <a class="dropdown-item copy-message" href="#">Copy</a>\
                    <a class="dropdown-item" href="#">Bookmark</a>\
                    <a class="dropdown-item delete-item" href="#">Delete</a>\
                </div>\
            </div>'
        }
        msgHTML += '</div>';
        return msgHTML;
    }

    function updateSelectedChat() {
        if (currentSelectedChat == "users") {
            document.getElementById("channel-chat").style.display = "none";
            document.getElementById("users-chat").style.display = "block";
            getChatMessages(url + "chats.json");
        } else {
            document.getElementById("channel-chat").style.display = "block";
            document.getElementById("users-chat").style.display = "none";
            getChatMessages(url + "chats.json");
        }
    }
    updateSelectedChat();

    //user list by json
    function getJSONFile(jsonurl, callback) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", jsonurl, true);
        xhr.responseType = "json";
        xhr.onload = function () {
            var status = xhr.status;
            if (status === 200) {
                callback(null, xhr.response);
            } else {
                callback(status, xhr.response);
            }
        };
        xhr.send();
    }
    //Chat Message
    function getChatMessages(jsonFileUrl) {
        getJSONFile(jsonFileUrl, function (err, data) {
            if (err !== null) {
                console.log("Something went wrong: " + err);
            } else {
                var chatsData =
                    currentSelectedChat == "users" ? data[0].chats : data[0].channel_chat;

                document.getElementById(
                    currentSelectedChat + "-conversation"
                ).innerHTML = "";
                var isContinue = 0;
                chatsData.forEach(function (isChat, index) {
                    if (isContinue > 0) {
                        isContinue = isContinue - 1;
                        return;
                    }
                    var isAlighn = isChat.from_id == userChatId ? " right" : " left";

                    var user = usersList.find(function (list) {
                        return list.id == isChat.to_id;
                    });

                    var msgHTML = '<li class="chat-list' + isAlighn + '" id=' + isChat.id + '>\
                        <div class="conversation-list">';

                    msgHTML += '<div class="user-chat-content">';
                    msgHTML += getMsg(isChat.id, isChat.msg, isChat.has_images, isChat.has_files, isChat.has_dropDown, isChat.datetime, user);
                    // if (chatsData[index + 1] && isChat.from_id == chatsData[index + 1]["from_id"]) {
                    //     isContinue = getNextMsgCounts(chatsData, index, isChat.from_id);
                    //     msgHTML += getNextMsgs(chatsData, index, isChat.from_id, isContinue, user);
                    // }

                    msgHTML += "</div>\
                </div>\
            </li>";
                    document.getElementById(currentSelectedChat + "-conversation").innerHTML += msgHTML;
                });
            }
            deleteMessage();
            deleteChannelMessage();
            deleteImage();
            copyMessage();
            copyChannelMessage();
            copyClipboard();
            imgPopup();
            scrollToBottom("users-chat");
        });
    };

    // toggleSelected
    function toggleSelected() {
        var userChatElement = document.querySelectorAll(".user-chat");
        Array.from(document.querySelectorAll(".chat-user-list li a")).forEach(function (item) {
            item.addEventListener("click", function (event) {

                // chat user list link active
                var chatUserList = document.querySelector(".chat-user-list li.active");
                if (chatUserList) chatUserList.classList.remove("active");
                this.parentNode.classList.add("active");
            });
        });
    }

    

    //user Name and user Profile change on click
    function chatSwap() {
        document.querySelectorAll("#userList li").forEach(function (item) {
            item.addEventListener("click", function () {
                currentSelectedChat = "users";
                updateSelectedChat();
                currentChatId = "users-chat";
                var contactId = item.getAttribute("id");
                var username = item.querySelector(".username").innerHTML;

                document.querySelector(".user-chat-topbar .text-truncate .username").innerHTML = username;

                if (document.getElementById(contactId).querySelector(".userprofile")) {
                    var userProfile = document.getElementById(contactId).querySelector(".userprofile").getAttribute("src");
                    document.querySelector(".user-chat-topbar .avatar-xs").setAttribute("src", userProfile);
                } else {
                    document.querySelector(".user-chat-topbar .avatar-xs").setAttribute("src", dummyUserImage);
                }

                var conversationElem = document.getElementById("users-conversation");
                conversationElem.querySelectorAll(".left .conversation-name").forEach(function (item) {
                    item.innerHTML = username
                });
                window.stop();
            });
        });

        //channel Name and channel Profile change on click
        document.querySelectorAll("#channelList li").forEach(function (item) {
            item.addEventListener("click", function () {
                currentChatId = "channel-chat";
                currentSelectedChat = "channel";
                scrollToBottom(currentChatId);
                updateSelectedChat();
                var channelname = item.querySelector(".text-truncate").innerHTML; 
                var changeChannelName = document.getElementById("channel-chat");
                changeChannelName.querySelector(".user-chat-topbar .avatar-xs").setAttribute("src", dummyMultiUserImage); 
                changeChannelName.querySelector(".user-chat-topbar .text-truncate .username").innerHTML = channelname;
            });
        });
    }

    function contactList() {
        document.querySelectorAll(".sort-contact ul li").forEach(function (item) {
            item.addEventListener("click", function (event) {
                currentSelectedChat = "users";
                updateSelectedChat();
                var contactName = item.querySelector("li .contactlist-name").innerHTML;
                document.querySelector(".user-chat-topbar .text-truncate .username").innerHTML = contactName;
                if (item.querySelector(".align-items-center").querySelector(".avatar-xs img")) {
                    var contactImg = item.querySelector(".align-items-center").querySelector(".avatar-xs .rounded-circle").getAttribute("src");
                    document.querySelector(".user-own-img .avatar-xs").setAttribute("src", contactImg);
                } else {
                    document.querySelector(".user-own-img .avatar-xs").setAttribute("src", dummyUserImage);
                }
                var conversationElem = document.getElementById("users-conversation");
                conversationElem.querySelectorAll(".left .conversation-name").forEach(function (item) {
                    item.innerHTML = contactName
                });
                window.stop();
            });
        });
    }

    //Delete Message 
    function deleteMessage() {
        var deleteItems = itemList.querySelectorAll(".delete-item");
        deleteItems.forEach(function (item) {
            item.addEventListener("click", function () {
                item.closest(".user-chat-content").childElementCount == 2
                    ? item.closest(".chat-list").remove()
                    : item.closest(".ctext-wrap").remove();
            });
        });
    }

    //Delete Channel Message
    var channelItemList = document.querySelector("#channel-conversation");
    function deleteChannelMessage() {
        var channelChatList = channelItemList.querySelectorAll(".delete-item");
        channelChatList.forEach(function (item) {
            item.addEventListener("click", function () {
                item.closest(".user-chat-content").childElementCount == 2
                    ? item.closest(".chat-list").remove()
                    : item.closest(".ctext-wrap").remove();
            });
        });
    }

    //Delete Image 
    function deleteImage() {
        var deleteImage = itemList.querySelectorAll(".chat-conversation-list .chat-list");
        deleteImage.forEach(function (item) {
            item.querySelectorAll(".delete-image").forEach(function (subitem) {
                subitem.addEventListener("click", function () {
                    subitem.closest(".message-img").childElementCount == 1
                        ? subitem.closest(".chat-list").remove()
                        : subitem.closest(".message-img-list").remove();
                });
            });
        });
    }

    //Copy Message to clipboard
    var itemList = document.querySelector(".chat-conversation-list");
    function copyMessage() {
        var copyMessage = itemList.querySelectorAll(".copy-message");
        copyMessage.forEach(function (item) {
            item.addEventListener("click", function () {
                var isText = item.closest(".ctext-wrap").children[0]
                    ? item.closest(".ctext-wrap").children[0].querySelector(".ctext-content").innerHTML
                    : "";
                navigator.clipboard.writeText(isText);
            });
        });
    }

    function copyChannelMessage() {
        var copyChannelMessage = channelItemList.querySelectorAll(".copy-message");
        copyChannelMessage.forEach(function (item) {
            item.addEventListener("click", function () {
                var isText = item.closest(".ctext-wrap").children[0]
                    ? item.closest(".ctext-wrap").children[0].querySelector(".ctext-content").innerHTML
                    : "";
                navigator.clipboard.writeText(isText);
            });
        });
    }

    //Copy Message Alert
    function copyClipboard() {
        var copyClipboardAlert = document.querySelectorAll(".copy-message");
        copyClipboardAlert.forEach(function (item) {
            item.addEventListener("click", function () {
                document.getElementById("copyClipBoard").style.display = "block";
                document.getElementById("copyClipBoardChannel").style.display = "block";
                setTimeout(hideclipboard, 1000);
                function hideclipboard() {
                    document.getElementById("copyClipBoard").style.display = "none";
                    document.getElementById("copyClipBoardChannel").style.display =
                        "none";
                }
            });
        });
    }
    
    function imgPopup(){
        $('.popup-img').magnificPopup({
            type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
		}
        });
    }

    // // Scroll to Bottom
    function scrollToBottom(id) {
        setTimeout(function () {
            var simpleBar = (document.getElementById(id).querySelector("#chat-conversation .simplebar-content-wrapper")) ?
                document.getElementById(id).querySelector("#chat-conversation .simplebar-content-wrapper") : ''

            var offsetHeight = document.getElementsByClassName("chat-conversation-list")[0] ?
                document.getElementById(id).getElementsByClassName("chat-conversation-list")[0].scrollHeight - window.innerHeight + 475 : 0;
            if (offsetHeight)
                simpleBar.scrollTo({
                    top: offsetHeight,
                    behavior: "smooth"
                });
        }, 100);
    }

    //chat form
    var chatForm = document.querySelector("#chatinput-form");
    var chatInput = document.querySelector("#chat-input");
    var chatInputfeedback = document.querySelector(".chat-input-feedback");

    function currentTime() {
        var ampm = new Date().getHours() >= 12 ? "pm" : "am";
        var hour =
            new Date().getHours() > 12 ?
                new Date().getHours() % 12 :
                new Date().getHours();
        var minute =
            new Date().getMinutes() < 10 ?
                "0" + new Date().getMinutes() :
                new Date().getMinutes();
        if (hour < 10) {
            return "0" + hour + ":" + minute + " " + ampm;
        } else {
            return hour + ":" + minute + " " + ampm;
        }
    }
    setInterval(currentTime, 1000);

    var messageIds = 0;

    if (chatForm) {
        //add an item to the List, including to local storage
        chatForm.addEventListener("submit", function (e) {
            e.preventDefault();
            var chatId = currentChatId;
            var chatInputValue = chatInput.value

            if (chatInputValue.length === 0) {
                chatInputfeedback.classList.add("show");
                setTimeout(function () {
                    chatInputfeedback.classList.remove("show");
                }, 2000);
            } else {
                getChatList(chatId, chatInputValue);
                scrollToBottom(chatId);
            }
            chatInput.value = "";
        })

    }

    //Append New Message
    var getChatList = function (chatid, chatItems) {
        messageIds++;
        var chatConList = document.getElementById(chatid);
        var itemList = chatConList.querySelector(".chat-conversation-list");

        var userName = document.getElementById("user-name").innerHTML

        if (chatItems != null) {
            itemList.insertAdjacentHTML(
                "beforeend",
                '<li class="chat-list right" id="chat-list-' +
                messageIds +
                '" >\
                    <div class="conversation-list">\
                        <div class="user-chat-content">\
                            <div class="ctext-wrap">\
                                <div class="ctext-wrap-content">\
                                    <div class="conversation-name">'+userName+'</div>\
                                    <p class="ctext-content">\
                                        ' +
                    chatItems + '\
                                    </p>\
                                    <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> '+currentTime()+'</p>\
                                </div>\
                                <div class="dropdown align-self-start message-box-drop">\
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\
                                        <i class="bx bx-dots-vertical-rounded"></i>\
                                    </a>\
                                    <div class="dropdown-menu">\
                                        <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>\
                                        <a class="dropdown-item copy-message" href="#""><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>\
                                        <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>\
                                        <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>\
                                </div>\
                            </div>\
                        </div>\
                    </div>\
                </div>\
            </li>'
            );
        }

        // remove chat list
        var newChatList = document.getElementById("chat-list-" + messageIds);
        newChatList.querySelectorAll(".delete-item").forEach(function (subitem) {
            subitem.addEventListener("click", function () {
                itemList.removeChild(newChatList);
            });
        });
        //Copy Message
        newChatList.querySelectorAll(".copy-message").forEach(function (subitem) {
            subitem.addEventListener("click", function () {
                var currentValue =
                    newChatList.childNodes[1].firstElementChild.firstElementChild
                        .firstElementChild.querySelector(".ctext-content").innerHTML;

                console.log(currentValue)
                navigator.clipboard.writeText(currentValue);
            });
        });

        //Copy Clipboard alert
        newChatList.querySelectorAll(".copy-message").forEach(function (subitem) {
            subitem.addEventListener("click", function () {
                document.getElementById("copyClipBoard").style.display = "block";
                setTimeout(hideclipboardNew, 1000);

                function hideclipboardNew() {
                    document.getElementById("copyClipBoard").style.display = "none";
                }
            });
        });
    }

})();