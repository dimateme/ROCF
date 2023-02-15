const menu_btn = document.getElementById('menu_btn')
const mobile_menu = document.getElementById('mobile_menu')
const menu_bars = document.getElementById('menu_bars')
const menu_close = document.getElementById('menu_close')

menu_btn.addEventListener('click', () => {
  mobile_menu.classList.toggle('hidden')
  menu_bars.classList.toggle('hidden')
  menu_close.classList.toggle('hidden')
})

kofiWidgetOverlay.draw('mohamedghulam', {
  'type': 'floating-chat',
  'floating-chat.donateButton.text': 'Support me',
  'floating-chat.donateButton.background-color': '#323842',
  'floating-chat.donateButton.text-color': '#fff'
});