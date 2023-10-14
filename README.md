## Laravel 10 Course

# Project Idea With Live Wire

1. User can Create a new help ticket.
2. Admin can reply on help ticket.
3. Admin can reject or resolve a ticket.
4. when admim updates on the ticket user may get a notification 
via email that the ticket was updated.
5. User can give Ticket title or description.
6. User can upload file like pdf or image.

#### Table Structure
1. Tickets 
     - title(string) {required}
     - description(text) {required}
     - status(open {default}, resolved, rejected) 
     - attachments(string) {nullable}
     - user_id(integer) {required} filled by Developer Logic
     - status_changed_by_id(integer) {nullable}

2. Replies 
   - body(text) {required}
   - ticket_id(integer) {required} filled by Developer Logic
   - user_id(integer) {required} filled by Developer Logic