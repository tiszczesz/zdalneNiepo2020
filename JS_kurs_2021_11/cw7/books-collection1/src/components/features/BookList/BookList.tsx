import React, { useState } from "react";
import { Card, ListGroup, Form, Button } from "react-bootstrap";
import { Book } from "../../../interfaces/book";
import { nanoid } from 'nanoid';

interface BookListProps {
    books: Book[],
    addBook: (book: Book) => void
}
const BookList = ({ books,addBook }: BookListProps) => {
    const [title,setTitle] = useState('');
    const [author,setAuthor] = useState('');
    const [price,setPrice] = useState(0);

    const handleSubmit = (e:React.FormEvent<HTMLFormElement>)=>{
        e.preventDefault();
        console.log('Add book');
        addBook({
            id:nanoid(),
            title,author,price
        })
        
    }
    return (
        <div>
            <h2>Lista książek</h2>
            <ListGroup className="mt-4">
               {books.map(book=><ListGroup.Item className="bg-light" key={book.id}>{book.title} {book.author} cena: {book.price} zł </ListGroup.Item>)}
            </ListGroup>
            <Card border="secondary" className="p-2 bg-light">
                <Card.Header>Dodaj nową książkę</Card.Header>
                <Card.Body>
                    <Form onSubmit={handleSubmit} >
                        <Form.Group controlId="title">
                            <Form.Label>Tytuł: </Form.Label>
                            <Form.Control type="text" name="title" value={title} onChange={e=>setTitle(e.target.value)} />
                        </Form.Group>
                        <Form.Group controlId="author">
                            <Form.Label>Autor: </Form.Label>
                            <Form.Control type="text" name="author" value={author} onChange={e=>setAuthor(e.target.value)} />
                        </Form.Group>
                        <Form.Group controlId="price">
                            <Form.Label>Tytuł: </Form.Label>
                            <Form.Control type="number" name="price" value={price} onChange={e=>isNaN(parseFloat(e.target.value))?0:setPrice(parseFloat(e.target.value))} />
                        </Form.Group>
                        <Button variant="primary" type="submit">Dodaj książkę</Button>
                    </Form>
                </Card.Body>
            </Card>
        </div>
    )
}

export default BookList;