import { ListGroup } from 'react-bootstrap';
import { Book } from '../../../interfaces/book';
interface AuthorListProps{
    books: Book[]
}
const AuthorList = ({books}:AuthorListProps) => {
    const authors = [...Array.from(new Set(books.map(book=>book.author)))];
    return (
        <section>
            <h2>Lista autorów</h2>
            <ListGroup>
                {authors.map((author,index)=>
                   <ListGroup.Item className='bg-success' key={index}>{author}</ListGroup.Item>)}
            </ListGroup>
        </section>
    );

}

export default AuthorList